<?php

/* * ******  Company Contracts Start ********** */

Route::get('list-contracts-companies',
    array_merge(['uses' => 'Superbackend\CompanyController@indexContractsCompanies'],
        $all_users))->name('list.contracts.companies');

Route::get('create-contract-company',
    array_merge(['uses' => 'Superbackend\CompanyController@createContractCompany'],
        $all_users))->name('create.contract.company');

Route::post('store-contract-company',
    array_merge(['uses' => 'Superbackend\CompanyController@storeContractCompany'],
        $all_users))->name('store.contract.company');

Route::get('edit-contract-company/{id}',
    array_merge(['uses' => 'Superbackend\CompanyController@editContractCompany'],
        $all_users))->name('edit.contract.company');

Route::put('update-contract-company/{id}',
    array_merge(['uses' => 'Superbackend\CompanyController@updateContractCompany'],
        $all_users))->name('update.contract.company');


Route::put('sort-contract-company',
    array_merge(['uses' => 'Superbackend\CompanyController@sortContractCompany'],
        $all_users))->name('sort.contract.company');


Route::delete('delete-contract-company',
    array_merge(['uses' => 'Superbackend\CompanyController@deleteContractCompany'],
        $all_users))->name('delete.contract.company');

Route::get('fetch-contract-companies',
    array_merge(['uses' => 'Superbackend\CompanyController@fetchContractsCompaniesData'],
        $all_users))->name('fetch.data.contracts.companies');

Route::get('sort-companies',
    array_merge(['uses' => 'Superbackend\CompanyController@sortCompanies'], $all_users))->name('sort.contract.company');

