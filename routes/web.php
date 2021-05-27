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

Route::get('/', 'App\Http\Controllers\MainController@forLend');

Route::get('/Lend', 'App\Http\Controllers\MainController@forLend');

Route::get('/ConteinerPage', 'App\Http\Controllers\MainController@forCP');

Route::get('/InfoPage', 'App\Http\Controllers\MainController@forIP');

Route::get('/yourReview', 'App\Http\Controllers\MainController@review')->name('yourReview');

Route::get('/example', 'App\Http\Controllers\MainController@example');

Route::post('/yourReview/check', 'App\Http\Controllers\MainController@check');


