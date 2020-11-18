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
Route::get('/{city_key}/category/{key}', function ($city_key, $key) {
	$value = session('city');
	// вытаскиваем данные о городе
	$city =  DB::table('cities')
                ->where('city_key', '=', $city_key)
                ->get()
                ->first();

	// вытаскиваем данные о категории
	$cat = Categories::where('cat_key', '=', $key)->first();

	// данные о салонах в категории
	$salons = DB::table('salons')->where('cat_key', 'like', '%' . $cat->toArray()['name'] . '%')
	->where('cityName', '=', $city->name)
	->paginate(15);


	return view('cat',[ 
		'cat' => $cat,
		'salons' => $salons,
		'city' => $city,
		'value' => $value
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
