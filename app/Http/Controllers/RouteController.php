<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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

        $releted = Product::all()->take(4);
        return view('single-product')->with(['product' => $product, 'releted' => $releted]);
    }
    public function getSingleProduct()
    {
        return view('single-product');
    }
    public function getCart()
    {
        if (!Session::has('cart')) {
            return redirect()->route('shop');
        }
        $oldcart = Session::get('cart');
        $cart = new Cart($oldcart);
        return view('cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
        //view is left do work on it
    }
    public function getCheckout()
    {
        if (!Session::has('cart')) {
            return redirect()->route('shop');
        }
        $oldcart = Session::get('cart');
        $cart = new Cart($oldcart);
        $total = $cart->totalPrice;
        return view('checkout', ['total' => $total]);
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
