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

Route::get('/', 'App\Http\Controllers\Main@welcome');
Route::get('/about', 'App\Http\Controllers\Main@about');
Route::get('/review', 'App\Http\Controllers\Main@review')->name('review');

Route::post('/review/check', 'App\Http\Controllers\Main@review_check');