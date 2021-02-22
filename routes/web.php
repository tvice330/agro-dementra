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
Route::get('/menus', 'MenuController@index');
Route::get('/settings', 'SettingController@index');
Route::get('/advantages', 'AdvantageController@index');
Route::get('/categories', 'CatagoryController@index');
Route::get('/Cooperations', 'MenuController@index');
