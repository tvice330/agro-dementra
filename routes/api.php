<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/menus', 'Admin\Menu\MenuController@index');
Route::get('/menus/{id}', 'Admin\Menu\MenuController@show');
Route::post('/menus', 'Admin\Menu\MenuController@store');
Route::put('/menus/{id}', 'Admin\Menu\MenuController@update');
Route::delete('/menus/{id}', 'Admin\Menu\MenuController@destroy');

Route::get('/settings', 'Admin\Setting\SettingController@index');
Route::get('/settings/{id}', 'Admin\Setting\SettingController@show');
Route::post('/settings', 'Admin\Setting\SettingController@store');
Route::put('/settings/{id}', 'Admin\Setting\SettingController@update');
Route::delete('/settings/{id}', 'Admin\Setting\SettingController@destroy');

Route::get('/advantages', 'Admin\Advantage\AdvantageController@index');
Route::get('/advantages/{id}', 'Admin\Advantage\AdvantageController@show');
Route::post('/advantages', 'Admin\Advantage\AdvantageController@store');
Route::put('/advantages/{id}', 'Admin\Advantage\AdvantageController@update');
Route::delete('/advantages/{id}', 'Admin\Advantage\AdvantageController@destroy');

Route::get('/categories', 'Admin\Category\CategoryController@index');
Route::get('/categories/{id}', 'Admin\Category\CategoryController@show');
Route::post('/categories', 'Admin\Category\CategoryController@store');
Route::put('/categories/{id}', 'Admin\Category\CategoryController@update');
Route::delete('/categories/{id}', 'Admin\Category\CategoryController@destroy');

Route::get('/partnerships', 'Admin\Partnership\PartnershipController@index');
Route::get('/partnerships/{id}', 'Admin\Partnership\PartnershipController@show');
Route::post('/partnerships', 'Admin\Partnership\PartnershipController@store');
Route::put('/partnerships/{id}', 'Admin\Partnership\PartnershipController@update');
Route::delete('/partnerships/{id}', 'Admin\Partnership\PartnershipController@destroy');

Route::post('/user_calls', 'Admin\UserCall\UserCallController@index');
Route::get('/user_calls/{id}', 'Admin\UserCall\UserCallController@show');
Route::post('/user_calls', 'Admin\UserCall\UserCallController@store');
Route::put('/user_calls/{id}', 'Admin\UserCall\UserCallController@update');
Route::delete('/user_calls/{id}', 'Admin\UserCall\UserCallController@destroy');

Route::get('/actions/{id}', 'Admin\Action\ActionController@index');
Route::get('/actions/{id}', 'Admin\Action\ActionController@show');
Route::post('/actions', 'Admin\Action\ActionController@store');
Route::put('/actions/{id}', 'Admin\Action\ActionController@update');
Route::delete('/actions/{id}', 'Admin\Action\ActionController@destroy');

Route::get('/action_values/{id}', 'Admin\ActionValues\ActionValuesController@index');
Route::get('/action_values/{id}', 'Admin\ActionValues\ActionValuesController@show');
Route::post('/action_values', 'Admin\ActionValues\ActionValuesController@store');
Route::put('/action_values/{id}', 'Admin\ActionValues\ActionValuesController@update');
Route::delete('/action_values/{id}', 'Admin\ActionValues\ActionValuesController@destroy');
