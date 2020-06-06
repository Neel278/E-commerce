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
    public function getCheckout()
    {
        return view('checkout');
    }
    public function getAbout()
    {
        return view('about');
    }
    public function getContact()
    {
        return view('contact');
    }
}
