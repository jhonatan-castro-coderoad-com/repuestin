<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('car', 'CarsController');

Route::resource('product', 'ProductsController');

Route::resource('sale', 'SalesController');

Route::resource('repair', 'RepairsController');

Route::resource('products_list', 'ProductsListController');

Route::resource('product_products_list', 'ProductProductsListController');
