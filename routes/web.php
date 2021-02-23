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
})->name('home');

    
/* About */
Route::get('about', function () {
    return view('etc.about');
});

/* Form */
Route::get('form', function () {
    return view('etc.form');
});

Route::get('login', 'AuthController@login')->name('login');
Route::post('login', 'AuthController@inilogin')->name('inilogin');
Route::get('logout', 'AuthController@logout')->name('logout');
Route::group(['middleware' => 'auth'], function()
{
    Route::post('form', 'FormController@store');
    Route::get('data', 'DataController@index');
    Route::get('data/edit{id}', 'DataController@edit');
    Route::post('data/edit', 'DataController@update');
    Route::get('data/hapus{id}', 'DataController@hapus');
});

