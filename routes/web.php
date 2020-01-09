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

Route::get('/', function () {
    return view('index');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/company_name', function () {
    return view('company_name');
});

Route::get('/chat', function () {
    return view('chat');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
