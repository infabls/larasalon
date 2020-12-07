<?php

use App\Http\Controllers\LocaleController;
use App\Models\Salon;
use App\Models\Categories;
use App\Models\Orders;
use Illuminate\Http\Request; 


session()->put('city', 'almaty');
// выбор города
Route::get('/city/{city_key}', function ($city_key) {
 	session()->put('city', $city_key);
	return redirect()->back();
});

// создание заявки
Route::post('createOrder', function (Request $request) {
	$order = new Orders;
	$order->firm_id = $request->firm_id;
    $order->name = $request->name;
    $order->status = 'На рассмотрении';
    $order->phone = $request->phone;
    $order->save();
    return back()->with('status', 'Ваша заявка была отправлена');
});

// страница категории с городами
Route::get('/{city_key}/category/{key}', function ($city_key, $key, Request $request) {
	$value = session('city');
	// вытаскиваем данные о городе
	$city =  DB::table('cities')
                ->where('city_key', '=', $city_key)
                ->get()
                ->first();

	// вытаскиваем данные о категории
	$cat = Categories::where('cat_key', '=', $key)->first();

	// подкатегории
	$subcats = DB::table('categories')
	->where('parentId', '=', $cat->id)
	->get();


	// фильтрация
	if ($request->filterBy === null) {
		// данные о салонах в категории
		$salons = Salon::where('cat_key', 'like', '%' . $cat->toArray()['name'] . '%')
		->where('cityName', '=', $city->name)
		->paginate(12);
	}

	//  с рейтингом
	if ($request->filterBy == 'withratings') {
		// данные о салонах в категории
		$salons = Salon::where('cat_key', 'like', '%' . $cat->toArray()['name'] . '%')
		->where('cityName', '=', $city->name)
		->where('reviewCount', '>', 0)
		->paginate(12)
		->appends(request()->query());
	}

	//  только зареганные
	if ($request->filterBy == 'verified') {
		// данные о салонах в категории
		$salons = Salon::where('cat_key', 'like', '%' . $cat->toArray()['name'] . '%')
		->where('cityName', '=', $city->name)
		->where('ownerId', '!=', 1)
		->paginate(12)
		->appends(request()->query());
	}
	//  c KaspiRed
	if ($request->filterBy == 'kaspiRed') {
		// данные о салонах в категории
		$salons = Salon::where('cat_key', 'like', '%' . $cat->toArray()['name'] . '%')
		->where('cityName', '=', $city->name)
		->where('kaspiRed', '=', 1)
		->paginate(12)
		->appends(request()->query());
	}

	// вывод ближайших
		// ука
        // $userlat = '49.95677';
        // $userlng = '82.61413';

		// нурик
		$userlat = '51.14942';
		$userlng = '71.42658';
        foreach ($salons as $salon) {
          $salon->distance = getDistanceBetweenPointsNew($salon->markerY,$salon->markerX, $userlat, $userlng);
        }

        
	return view('cat',[ 
		'cat' => $cat,
		'salons' => $salons,
		'city' => $city,
		'value' => $value,
		'subcats' => $subcats,
		'userlat' => $userlat,
		'userlng' => $userlng
	]);
});


// вывод ближайших компаний
Route::get('/nearest', function (Request $request) {
	
	$userlat = $request->input('lat');
	$userlng = $request->input('lng');
	// если не установлены
	if ($userlat == NULL OR $userlng == NULL) {
		// нурик
		$userlat = '51.14942';
		$userlng = '71.42658';
	}
	$value = session('city');
	// вытаскиваем данные о городе
	$city =  DB::table('cities')
                ->where('city_key', '=', $value)
                ->get()
                ->first();

    // вывод ближайших
		// ука
        // $userlat = '49.95677';
        // $userlng = '82.61413';



	// данные о салонах в категории
		$salons = DB::table('salons')
			->selectRaw("*, 
        (
            (
                (
                    acos(
                        sin((   $userlat * pi() / 180))
                        *
                        sin(( `markerY` * pi() / 180)) + cos(( $userlat * pi() /180 ))
                        *
                        cos(( `markerY` * pi() / 180)) * cos((( $userlng - `markerX`) * pi()/180)))
                ) * 180/pi()
            ) * 60 * 1.1515
        )
    as distance")->orderBy('distance')
		->paginate(12)
		->appends(request()->query());
	
        foreach ($salons as $salon) {
          $salon->distance = getDistanceBetweenPointsNew($salon->markerY,$salon->markerX, $userlat, $userlng);
        }

        
	return view('nearest',[ 
		'salons' => $salons,
		'city' => $city,
		'value' => $value,
		'userlat' => $userlat,
		'userlng' => $userlng
	]);
});

// страница салона
Route::get('salon/{key}', function ($key) {
	$salon = Salon::where('urlKey', '=', $key)->firstOrFail();
	$value = session('city');
	// $salon = DB::table('salons')->where('urlKey', $key)->first()->toArray();
	return view('salon',[ 
	'salon' => $salon,
	'value' => $value
	]);
});

// все салоны
Route::get('salons/', function () {
	$salons = DB::table('salons')->paginate(15);
	// $salon = DB::table('salons')->where('urlKey', $key)->first()->toArray();
	return view('salons',[ 'salons' => $salons]);
});
/*
 * Global Routes
 *
 * Routes that are used between both frontend and backend.
 */

// Switch between the included languages
Route::get('lang/{lang}', [LocaleController::class, 'change'])->name('locale.change');

/*
 * Frontend Routes
 */
Route::group(['as' => 'frontend.'], function () {
    includeRouteFiles(__DIR__.'/frontend/');
});

/*
 * Backend Routes
 *
 * These routes can only be accessed by users with type `admin`
 */
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    includeRouteFiles(__DIR__.'/backend/');
});


/**
 * Method to find the distance between 2 locations from its coordinates.
 * 
 * @param latitude1 LAT from point A
 * @param longitude1 LNG from point A
 * @param latitude2 LAT from point A
 * @param longitude2 LNG from point A
 * 
 * @return Float Distance in Kilometers.
 */
function getDistanceBetweenPointsNew($latitude1, $longitude1, $latitude2, $longitude2, $unit = 'Mi') {
    $theta = $longitude1 - $longitude2;
    $distance = sin(deg2rad($latitude1)) * sin(deg2rad($latitude2)) + cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * cos(deg2rad($theta));

    $distance = acos($distance); 
    $distance = rad2deg($distance); 
    $distance = $distance * 60 * 1.1515;

    switch($unit) 
    { 
        case 'Mi': break;
        case 'Km' : $distance = $distance * 1.609344; 
    }

    return (round($distance,3)); 
}