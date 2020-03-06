<?php

/* * ******  Package Start ********** */
Route::get('list-packages',
    array_merge(['uses' => 'Superbackend\PackageController@indexPackages'], $all_users))->name('list.packages');

Route::get('create-package',
    array_merge(['uses' => 'Superbackend\PackageController@createPackage'], $all_users))->name('create.package');

Route::post('store-package',
    array_merge(['uses' => 'Superbackend\PackageController@storePackage'], $all_users))->name('store.package');

Route::get('edit-package/{id}',
    array_merge(['uses' => 'Superbackend\PackageController@editPackage'], $all_users))->name('edit.package');

Route::put('update-package/{id}',
    array_merge(['uses' => 'Superbackend\PackageController@updatePackage'], $all_users))->name('update.package');

Route::delete('delete-package',
    array_merge(['uses' => 'Superbackend\PackageController@deletePackage'], $all_users))
    ->name('delete.package');

Route::get('fetch-packages',
    array_merge(['uses' => 'Superbackend\PackageController@fetchPackagesData'], $all_users))
    ->name('fetch.data.packages');

/* * ****** End Package ********** */
