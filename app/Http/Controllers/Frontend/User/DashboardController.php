<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Models\Salon;
use Auth;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
		$id = Auth::id();
		$salons = Salon::where('ownerId', '=', $id)
	    ->get();
	    // количество салонов
	    $salons_count = $salons->count();
	    $orders_count = 0;
	    	for ($i=0; $i < $salons_count; $i++) { 
	    		$order[$i] = Orders::where('firm_id', '=', $salons[$i]->id);
	    		// количество заявок
	    		$orders_count += $order[$i]->count();
	    	}
        return view('frontend.user.dashboard', [ 'salons' => $salons_count, 'orders' => $orders_count]);
    }
}
