<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RouteController extends Controller
{
    public function getHome()
    {
        return view('welcome');
    }
    public function getShop()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('shop')->with(['categories' => $categories, 'products' => $products]);
    }
    public function getSingleProductDetails($product_id)
    {
        $product = Product::find($product_id);
        return view('single-product')->with(['product' => $product]);
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
    public function getSignup()
    {
        return view('user.signup');
    }
    public function getLogin()
    {
        return view('user.login');
    }
}
