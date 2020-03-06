<?php

/* * ******  Province route ********** */

Route::get('list-provinces',
    array_merge(['uses' => 'Superbackend\ProvinceController@indexProvinces'], $all_users))->name('list.provinces');

Route::get('create-province',
    array_merge(['uses' => 'Superbackend\ProvinceController@createProvince'], $all_users))->name('create.province');

Route::get('sort-provinces',
    array_merge(['uses' => 'Superbackend\ProvinceController@sortProvince'], $all_users))->name('sort.provinces');

Route::get('fetch-provinces',
    array_merge(['uses' => 'Superbackend\ProvinceController@fetchProvincesData'],
        $all_users))->name('fetch.data.provinces');

Route::delete('delete-province',
    array_merge(['uses' => 'Superbackend\ProvinceController@deleteProvince'], $all_users))->name('delete.province');

Route::put('make-active-province',
    array_merge(['uses' => 'Superbackend\ProvinceController@makeActiveProvince'],
        $all_users))->name('make.active.province');

Route::put('make-not-active-province',
    array_merge(['uses' => 'Superbackend\ProvinceController@makeNotActiveProvince'],
        $all_users))->name('make.not.active.province');

Route::get('create-province',
    array_merge(['uses' => 'Superbackend\ProvinceController@createProvince'], $all_users))->name('create.province');

Route::post('store-province',
    array_merge(['uses' => 'Superbackend\ProvinceController@storeProvince'], $all_users))->name('store.province');

Route::get('province-sort-data',
    array_merge(['uses' => 'Superbackend\ProvinceController@provinceSortData'],
        $all_users))->name('province.sort.data');

Route::put('province-sort-update',
    array_merge(['uses' => 'Superbackend\ProvinceController@provinceSortUpdate'],
    $all_users))->name('province.sort.update');

