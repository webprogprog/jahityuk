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
    return view('welcome');
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

Route::group(['prefix' => '/user'], function() {
    Route::get('/{id}', 'UserController@show');
    Route::get('/{id}/edit', 'UserController@edit')->middleware(['auth']);
    Route::put('/{id}', 'UserController@update')->middleware(['auth']);
});

Route::group(['prefix' => '/item'], function() {
    Route::get('/{id}/show', 'ItemController@show')->middleware(['auth']);
    // Route::put('/{id}', 'UserController@update')->middleware(['auth']);
});
