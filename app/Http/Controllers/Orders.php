<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salon;
use App\Models\Orders;


class Orders extends Controller
{
    public function index()
    {
        return view('frontend.pages.orders');
    }
    public function addfirm()
    {
        return view('backend.addfirm');
    }
    public function delete()
    {

        return view('backend.addfirm');
    }
}
