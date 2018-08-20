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
})->name('home');

Route::get('/home', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/daftar', 'DaftarController@daftar_create')->name('daftar');
Route::post('/daftar', 'DaftarController@daftar_store')->name('daftar.store');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::get('detail/{id}', 'HomeController@detail_pendaftar')->name('dashboard.detail');
});
