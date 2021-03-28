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
    return view('layouts.app');
});



Route::get('register', 'users@register');
Route::post('loginsubmit', 'users@logon');
Route::post('registersubmit', 'users@registers');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
