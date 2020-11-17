<?php

use App\Http\Controllers\Backend\DashboardController;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('admin.dashboard'));
    });


// все салоны
Route::get('salons/', function () {
	$salons = DB::table('salons')->paginate(15);
	// $salon = DB::table('salons')->where('urlKey', $key)->first()->toArray();
	return view('salons',[ 'salons' => $salons]);
});
Route::get('addfirm', [DashboardController::class, 'addfirm'])
    ->name('addfirm')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('admin.addfirm'));
    });