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

Route::get('/', 'App\Http\Controllers\UserController@index');
Route::Post('user', 'App\Http\Controllers\UserController@store')->name('user.store');
Route::delete('user/{user}', 'App\Http\Controllers\UserController@destroy')->name('user.destroy');

