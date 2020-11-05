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
    return view('welcome'); });
Route::get('/', 'AboutController@numpang')->name('welcome');
    
/* About */
Route::get('about', function () {
	return view('etc/about'); });
Route::get('about', 'AboutController@index')->name('etc.about');

/* Data */
Route::get('data', function () {
    return view('etc.data'); });
Route::get('data', 'AboutController@data')->name('etc.data');

/* Form */
Route::get('form', function () {
    return view('etc.form'); });
Route::get('form', 'AboutController@form')->name('etc.form');
Route::post('form', 'FormController@store');

