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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('/categories', 'CategoryController');

Route::delete('/cart', 'CartController@clear')->name('cart.clear');


Route::resources([
	'categories' => 'CategoryController',
	'products' => 'ProductController',
	'cart' => 'CartController',
	'transactions' => 'TransactionController'
]);
