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
Route::get('salon', function () {
	$id = Auth::id();
	$salon = Salon::where('ownerId', '=', $id)->firstOrFail();
    return view('frontend.pages.salon',[ 'salon' => $salon]);
});


// изменение инфы о салоне форма
Route::get('editsalon', function () {
    $id = Auth::id();
    $salon = Salon::where('ownerId', '=', $id)->firstOrFail();
    return view('frontend.pages.editsalon',[ 'salon' => $salon]);
});
// прием пост запроса на изменение данных
Route::post('editsalon2', function (Request $request) {
    $id = Auth::id();
    $salon = Salon::where('ownerId', '=', $id)->firstOrFail();
    $salon->name = $request->name;
    $salon->phoneNumbers = $request->phoneNumbers;
    $salon->save();
    return redirect('editsalon')->with('status', 'Страница была изменена');
});

// логика работы с заявками

// список заявок
Route::get('orders', function () {
    $id = Auth::id();
    $salon = Salon::where('ownerId', '=', $id)->firstOrFail();

    // данные о заявках фирме
    $orders = DB::table('orders')->where('firm_id', '=', $salon->id)
    ->paginate(15);
    return view('frontend.pages.my-orders',[ 'orders' => $orders]);
});


// удаление заявки
Route::delete('/orders/{order_id}', function (Orders $order_id) {
    $id = Auth::id();
    $salon = Salon::where('ownerId', '=', $id);
    if ($orders->firm_id == $salon->id) {
        $orders->delete();
        return redirect('back')->with('status', 'Заявка была удалена');;
    }
    else {
        return abort(401);
    }
});    



