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

$ctrl = '\App\Http\Controllers';
Route::get('/', $ctrl.'\LoginController@login')->name('login');
Route::post('actionlogin', $ctrl.'\LoginController@actionlogin')->name('actionlogin');
Route::get('create', $ctrl.'\DocumentController@create')->name('create');
Route::post('store', $ctrl.'\DocumentController@store')->name('store');

Route::get('home', $ctrl.'\DocumentController@index')->name('home');
Route::get('actionlogout', $ctrl.'\LoginController@actionlogout')->name('actionlogout')->middleware('auth');


