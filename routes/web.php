<?php

use Illuminate\Support\Facades\Route;


Route::get('/menus', 'Clients\Menu\MenuController@index');
Route::get('/settings', 'Clients\Setting\SettingController@index');
Route::get('/advantages', 'Clients\Advantage\AdvantageController@index');
Route::get('/categories', 'Clients\Category\CategoryController@index');
Route::get('/partnerships', 'Clients\Partnership\PartnershipController@index');
Route::post('/user_calls', 'Clients\UserCall\UserCallController@store');
Route::post('/ask_questions', 'Clients\AskQuestion\AskQuestionController@store');
