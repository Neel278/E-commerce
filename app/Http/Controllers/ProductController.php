<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function getCategoryProducts($cat_name)
    {
        $cat_id = DB::table('categories')->where('product_category', $cat_name)->value('id');
        $products = DB::table('products')->where('category', $cat_id)->get();
        $categories = Category::all();
        return view('shop')->with(['categories' => $categories, 'products' => $products]);
    }
    public function getProductImage($filename)
    {
        $file = Storage::disk('local')->get($filename);
        return new Response($file, 200);
    }
    public function getAddToCart($id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        session(['cart' => $cart]);
        return redirect()->back();
    }
}
