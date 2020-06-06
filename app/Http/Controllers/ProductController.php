<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // public function getAllProducts()
    // {
    //     $products = DB::table('products')->all();
    // }
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
}
