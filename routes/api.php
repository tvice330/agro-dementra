<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::namespace('Admin')->prefix('/Admin')->group(function () {
    Route::apiResource('menus', 'Admin\Menu\MenuController');
    Route::apiResource('settings', 'Admin\Setting\SettingController');
    Route::apiResource('advantages', 'Admin\Advantage\AdvantageController');
    Route::apiResource('categories', 'Admin\Category\CategoryController');
    Route::apiResource('partnerships', 'Admin\Partnership\PartnershipController');
    Route::apiResource('user_calls', 'Admin\UserCall\UserCallController');
    Route::apiResource('actions', 'Admin\Action\ActionController');
    Route::apiResource('action_values', 'Admin\ActionValues\ActionValuesController');
    Route::apiResource('company_descriptions', 'Admin\CompanyDescription\CompanyDescriptionController');
});
