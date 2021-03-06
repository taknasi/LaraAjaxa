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

Route::get('/', 'UserController@index');

Route::delete('users/delete','UserController@destroy')->name('users.destroye');
Route::put('users/update','UserController@update')->name('users.updatee');
Route::resource('users', UserController::class);

