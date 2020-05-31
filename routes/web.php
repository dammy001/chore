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

Route::get('/', 'HomeController@index');

Route::get('/show/{movie_id}', 'HomeController@show')->name('show');

Route::get('actor/{actor_id}', 'HomeController@actor')->name('actor');

Route::get('top-rated', 'HomeController@topRated')->name('top-rated');

Auth::routes(['verify' => true]);

Route::get('verifyemail/{token}', 'Auth\RegisterController@verify')->name('verifyemail');

 Route::get('/home', 'HomeController@index')->middleware('verified');

 Route::get('logout', 'Auth\LoginController@logout')->name('logout');
