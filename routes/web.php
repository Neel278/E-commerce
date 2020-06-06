<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    'uses' => 'RouteController@getHome',
    'as' => 'home'
]);
Route::get('/shop', [
    'uses' => 'RouteController@getShop',
    'as' => 'shop'
]);
Route::get('/single-product', [
    'uses' => 'RouteController@getSingleProduct',
    'as' => 'single-product'
]);
Route::get('/cart', [
    'uses' => 'RouteController@getCart',
    'as' => 'cart'
]);
Route::get('/checkout', [
    'uses' => 'RouteController@getCheckout',
    'as' => 'checkout'
]);
Route::get('/about', [
    'uses' => 'RouteController@getAbout',
    'as' => 'about'
]);
Route::get('/contact', [
    'uses' => 'RouteController@getContact',
    'as' => 'contact'
]);
Route::get('/signup', [
    'uses' => 'RouteController@getSignup',
    'as' => 'signup'
]);
Route::get('/login', [
    'uses' => 'RouteController@getLogin',
    'as' => 'login'
]);
Route::post('/signup', [
    'uses' => 'UserController@postSignup',
    'as' => 'signup'
]);
Route::post('/login', [
    'uses' => 'UserController@postLogin',
    'as' => 'login'
]);
Route::get('/logout', [
    'uses' => 'UserController@getLogout',
    'as' => 'logout'
]);
Route::get('/products/{cat_id}', [
    'uses' => 'ProductController@getCategoryProducts',
    'as' => 'category.product'
]);
Route::get('/productimage/{filename}', [
    'uses' => 'ProductController@getProductImage',
    'as' => 'product.image'
]);
