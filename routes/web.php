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

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::view('/register','register');

Route::post('/login','UserController@login');
Route::post('/register','UserController@register');
Route::get('/','ProductController@index');
Route::get('detail/{id}','ProductController@detail');
Route::get('search','ProductController@search');
Route::post('add_to_cart','ProductController@addToCart');
Route::get('cartlist','ProductController@cartList');
Route::get('removecart/{id}','ProductController@removeCart');
Route::get('ordernow','ProductController@orderNow');
Route::post('orderplace','ProductController@orderPlace');
Route::get('myorders','ProductController@myOrders');
