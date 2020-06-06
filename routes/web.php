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
