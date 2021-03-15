<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'namespace' => 'Admin',
    'prefix' => 'admin',
    'middleware' => 'auth'
], function () {
    Route::apiResource('menus', 'Menu\MenuController');
    Route::apiResource('menus', 'Menu\MenuController')->except('create', 'edit');
    Route::apiResource('settings', 'Setting\SettingController');
    Route::apiResource('settings', 'Setting\SettingController')->except('create', 'edit');
    Route::apiResource('advantages', 'Advantage\AdvantageController');
    Route::apiResource('advantages', 'Advantage\AdvantageController')->except('create', 'edit');
    Route::apiResource('categories', 'Category\CategoryController');
    Route::apiResource('categories', 'Category\CategoryController')->except('create', 'edit');
    Route::apiResource('partnerships', 'Partnership\PartnershipController');
    Route::apiResource('partnerships', 'Partnership\PartnershipController')->except('create', 'edit');
    Route::apiResource('actions', 'Action\ActionController');
    Route::apiResource('actions', 'Action\ActionController')->except('create', 'edit');
    Route::apiResource('action_values', 'ActionValues\ActionValuesController');
    Route::apiResource('action_values', 'ActionValues\ActionValuesController')->except('create', 'edit');
    Route::apiResource('company_descriptions', 'CompanyDescription\CompanyDescriptionController');
    Route::apiResource('company_descriptions', 'CompanyDescription\CompanyDescriptionController')->except('create', 'edit');
});
