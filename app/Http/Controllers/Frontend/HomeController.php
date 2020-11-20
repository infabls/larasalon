<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Categories;
use App\Models\Salon;



/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
    	$value = session('city');
        // вытаскиваем данные о городе
        $city =  DB::table('cities')
                ->where('city_key', '=', $value)
                ->get()
                ->first();
        $cats = Categories::all()->take(6);
        $salons = Salon::where('cityName', '=', $city->name)   
        ->take(6)
        ->get();
        return view('frontend.index', [
        	'value' => $value,
            'city' => $city,
            'cats' => $cats,
            'salons' => $salons,
        ]);
    }
}
