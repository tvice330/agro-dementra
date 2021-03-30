<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'namespace' => 'Admin',
    'prefix' => 'admin',
    'middleware' => 'auth:api'
], function () {
    Route::apiResource('menus', 'Menu\MenuController')->except('create', 'edit');
    Route::apiResource('settings', 'Setting\SettingController')->except('create', 'edit');
    Route::apiResource('advantages', 'Advantage\AdvantageController')->except('create', 'edit');
    Route::apiResource('categories', 'Category\CategoryController')->except('create', 'edit');
    Route::apiResource('partnerships', 'Partnership\PartnershipController')->except('create', 'edit');
    Route::apiResource('actions', 'Action\ActionController')->except('create', 'edit');
    Route::apiResource('action_values', 'ActionValues\ActionValuesController')->except('create', 'edit');
    Route::apiResource('company_descriptions', 'CompanyDescription\CompanyDescriptionController')->except('create', 'edit');
    Route::apiResource('products', 'Product\ProductController')->except('create', 'edit');
});

Route::group([
    'namespace' => 'Admin',
    'prefix' => 'admin',
], function () {
    Route::post('register', 'Auth\ApiAuthController@register');
    Route::post('login', 'Auth\ApiAuthController@login');
    Route::post('logout', 'Auth\ApiAuthController@logout');
});
