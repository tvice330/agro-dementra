<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/menus', 'Admin\Menu\MenuController@index');
Route::get('/settings', 'Admin\Setting\SettingController@index');
Route::get('/advantages', 'Admin\Advantage\AdvantageController@index');
Route::get('/categories', 'Admin\Category\CategoryController@index');
Route::get('/partnerships', 'Admin\Partnership\PartnershipController@index');
Route::post('/user_calls', 'Admin\User_Call\UserCallController@store');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
