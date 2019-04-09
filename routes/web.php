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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/register-courier', 'Auth\RegisterController@registerCourier')->name('registerCourier');

Route::get('home/transports/{transport}', 'TransportController@show')->name('showTtransport');
Route::get('home/transport/create', 'TransportController@create')->name('createTransport');
Route::post('home/transports/', 'TransportController@store')->name('storeTransport');
Route::delete('home/transports/{transport}','TransportController@destroy')->name('deleteTransport');

Route::get('home/transports/{transport}/edit', 'TransportController@edit');
Route::patch('home/transports/{transport}','TransportController@update')->name('updateTransport');
