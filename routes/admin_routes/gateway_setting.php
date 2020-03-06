<?php

/* * ****** Gateway Payment Setting Start ********** */

Route::get('edit-gateway-setting',
    array_merge(['uses' => 'Superbackend\GatewaySettingController@editGatewaySetting'], $all_users))
    ->name('edit.gateway.setting');

Route::get('create-gateway-setting',
    array_merge(['uses' => 'Superbackend\GatewaySettingController@createGatewaySetting'], $all_users))
    ->name('create.gateway');

Route::get('fetch-data-gateways',
    array_merge(['uses' => 'Superbackend\GatewaySettingController@fetchGatewaySetting'], $all_users))
    ->name('fetch.data.gateways');
