<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function getHome()
    {
        return view('welcome');
    }
    public function getShop()
    {
        return view('shop');
    }
    public function getSingleProduct()
    {
        return view('single-product');
    }
    public function getCart()
    {
        return view('cart');
    }
}
