<?php

/* * ******  Company Users Start ********** */

Route::get('list-users-companies',
    array_merge(['uses' => 'Superbackend\CompanyController@indexUserCompanies'],
        $all_users))->name('list.users.companies');

Route::get('create-user-company',
    array_merge(['uses' => 'Superbackend\CompanyController@createUserCompany'],
        $all_users))->name('create.user.company');

Route::post('store-user-company',
    array_merge(['uses' => 'Superbackend\CompanyController@storeUserCompany'],
        $all_users))->name('store.user.company');

Route::get('edit-company/{id}',
    array_merge(['uses' => 'Superbackend\CompanyController@editUserCompany'],
        $all_users))->name('edit.user.company');

Route::put('update-company/{id}',
    array_merge(['uses' => 'Superbackend\CompanyController@updateUserCompany'],
        $all_users))->name('update.user.company');

Route::delete('delete-user-company',
    array_merge(['uses' => 'Superbackend\CompanyController@deleteUserCompany'],
        $all_users))->name('delete.user.company');

Route::get('fetch-user-companies',
    array_merge(['uses' => 'Superbackend\CompanyController@fetchUsersCompaniesData'],
        $all_users))->name('fetch.data.users.companies');
