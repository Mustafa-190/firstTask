<?php

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
Route::middleware('admin')->group(function () {
	Route::get('/home', 'ProductController@all')->name('home');

	Route::get('/product/create', 'ProductController@create')->name('product.create');
	Route::post('product/store', 'ProductController@store')->name('product.store');
	Route::get('product/{id}', 'ProductController@show')->name('product.show');

	Route::get('/customer/create', 'CustomerController@create')->name('create.customer');
	Route::post('/customer/store', 'CustomerController@store')->name('store.customer');

	Route::get('/orders', 'OrderController@all')->name('order.all');
	Route::resource('order', 'OrderController');

	Route::get('export', 'OrderController@export')->name('order.export');
});
Auth::routes();
Route::get('/', function () {
    return view('welcome');
})->name('home_page');

