<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\TermsController;
// use App\Http\Controllers\Frontend\Orders;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Tabuna\Breadcrumbs\Trail;
use App\Models\Salon;
use App\Models\Orders;


/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
session()->put('city', 'almaty');
Route::get('/', [HomeController::class, 'index'])
    ->name('index')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('frontend.index'));
    });

Route::get('terms', [TermsController::class, 'index'])
    ->name('pages.terms')
    ->breadcrumbs(function (Trail $trail) {
        $trail->parent('frontend.index')
            ->push(__('Terms & Conditions'), route('frontend.pages.terms'));
    });

Route::get('terms', [TermsController::class, 'index'])
    ->name('pages.terms')
    ->breadcrumbs(function (Trail $trail) {
        $trail->parent('frontend.index')
            ->push(__('Terms & Conditions'), route('frontend.pages.terms'));
    });

// вывод собственного салона
Route::get('salons', function () {
    if (!Auth::user()) {
        return abort(404);
    }
	$id = Auth::id();
	$salons = Salon::where('ownerId', '=', $id)
    ->paginate(10);
    return view('frontend.pages.salons',[ 'salons' => $salons]);
})->name('home.salons');


// изменение инфы о салоне форма
Route::get('editsalon/{id}', function ($id) {
    if (!Auth::user()) {
        return abort(404);
    }
    $user_id = Auth::id();
    $salon = Salon::where('id', '=', $id)->firstOrFail();
    if ($user_id !== intval($salon->ownerId)) {
        return abort(404);
    }
    return view('frontend.pages.editsalon',[ 'salon' => $salon]);
});

// прием пост запроса на изменение данных
Route::post('editsalon/{id}', function ($id, Request $request) {
    if (!Auth::user()) {
        return abort(404);
    }
    $user_id = Auth::id();
    $salon = Salon::where('id', '=', $id)->firstOrFail();
    if ($user_id !== intval($salon->ownerId)) {
        return abort(404);
    }
    $salon->name = $request->name;
    $salon->phoneNumbers = $request->phoneNumbers;
    $salon->cityName = $request->cityName;
    $salon->description = $request->description;
    $salon->instagramProfile = $request->instagramProfile;
    $salon->markerY = $request->markerY;
    $salon->markerX = $request->markerX;
    $salon->kaspiRed = $request->kaspiRed;
    $salon->save();
    return redirect("editsalon/$id")->with('status', 'Страница была изменена');
});


// удаление фирмы
// Route::delete('editsalon/{id}', function ($id) {
//     $user_id = Auth::id();
//     $salon = Salon::where('ownerId', '=', $user_id)->firstOrFail();
//     $order = Orders::findOrFail($id);
//     $firm_id = $order->firm_id;
//     if ($firm_id == $salon->id) {
//         $order->delete();
//         return back()->with('status', 'Заявка была удалена');;
//     }
//     else {
//         return abort(401);
//     }
// });    


// логика работы с заявками

// список заявок
Route::get('orders', function () {
    $id = Auth::id();
    $salon = Salon::where('ownerId', '=', $id)->firstOrFail();
    // данные о заявках фирме
    $orders = DB::table('orders')->where('firm_id', '=', $salon->id)
    ->paginate(10);
    return view('frontend.pages.my-orders',[ 'orders' => $orders]);
})->name('home.orders');


// удаление заявки
Route::delete('/orders/{id}', function ($id) {
    $user_id = Auth::id();
    $salon = Salon::where('ownerId', '=', $user_id)->firstOrFail();
    $order = Orders::findOrFail($id);
    $firm_id = $order->firm_id;
    if ($firm_id == $salon->id) {
        $order->delete();
        return back()->with('status', 'Заявка была удалена');;
    }
    else {
        return abort(401);
    }
});    

// изменение статуса заявки
Route::put('orders/{id}/change', function ($id) {
    $user_id = Auth::id();
    $salon = Salon::where('ownerId', '=', $user_id)->firstOrFail();
    $order = Orders::findOrFail($id);
    $firm_id = $order->firm_id;
    if ($firm_id == $salon->id) {
        $order->status = 'Просмотрено';
        $order->save();
        return back()->with('status', 'Статус был изменен');
    }
    else {
        return abort(401);
    }
    
});


