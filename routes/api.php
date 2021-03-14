<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::namespace('Admin')->prefix('/admin')->group(function () {
    Route::apiResource('menus', 'Menu\MenuController');
    Route::apiResource('settings', 'Setting\SettingController');
    Route::apiResource('advantages', 'Advantage\AdvantageController');
    Route::apiResource('categories', 'Category\CategoryController');
    Route::apiResource('partnerships', 'Partnership\PartnershipController');
    Route::apiResource('user_calls', 'UserCall\UserCallController');
    Route::apiResource('actions', 'Action\ActionController');
    Route::apiResource('action_values', 'ActionValues\ActionValuesController');
    Route::apiResource('company_descriptions', 'CompanyDescription\CompanyDescriptionController');
});
