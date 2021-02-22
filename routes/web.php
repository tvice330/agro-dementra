<?php

use Illuminate\Support\Facades\Route;


Route::get('/menus', 'Admin\Menu\MenuController@index');
Route::get('/settings', 'Admin\Setting\SettingController@index');
Route::get('/advantages', 'Admin\Advantage\AdvantageController@index');
Route::get('/categories', 'Admin\Category\CategoryController@index');
Route::get('/partnerships', 'Admin\Partnership\PartnershipController@index');
Route::get('/user_calls', 'Admin\User_Call\User_callController@index');
Route::post('/user_calls', 'Admin\User_Call\User_callController@store');
