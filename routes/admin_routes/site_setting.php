<?php

/* * ******  SiteSetting Start ********** */
Route::get('edit-site-setting',
    array_merge(['uses' => 'Superbackend\SiteSettingController@editsiteSetting'], $all_users))
    ->name('edit.site.setting');

Route::put('update-site-setting',
    array_merge(['uses' => 'Superbackend\SiteSettingController@updatesiteSetting'], $all_users))
    ->name('update.site.setting');

/* * ****** End SiteSetting ********** */

/* * ****** TAx setting ********** */

Route::get('tax-site-setting',
    array_merge(['uses' => 'Superbackend\TaxController@indexTax'], $all_users))
    ->name('list.tax.setting');

Route::get('create-tax',
    array_merge(['uses' => 'Superbackend\TaxController@createTax'], $all_users))
    ->name('create.tax');

Route::get('fetch-data-taxes',
    array_merge(['uses' => 'Superbackend\TaxController@fetchDataTax'], $all_users))
    ->name('fetch.data.taxes');

Route::get('delete-tax',
    array_merge(['uses' => 'Superbackend\TaxController@fetchDataTax'], $all_users))
    ->name('delete.tax');

Route::get('active-tax',
    array_merge(['uses' => 'Superbackend\TaxController@fetchDataTax'], $all_users))
    ->name('make.active.tax');

Route::get('inactive-tax',
    array_merge(['uses' => 'Superbackend\TaxController@fetchDataTax'], $all_users))
    ->name('make.not.active.tax');

/* * ****** End Tax ********** */


/* * ****** Agreement setting ********** */

Route::get('list-agreement',
    array_merge(['uses' => 'Superbackend\AgreementController@indexAgreement'], $all_users))
    ->name('list.agreement');

Route::get('create-agreement',
    array_merge(['uses' => 'Superbackend\AgreementController@createAgreement'], $all_users))
    ->name('create.agreement');

Route::get('list-item-agreement',
    array_merge(['uses' => 'Superbackend\AgreementController@indexItemAgreement'], $all_users))
    ->name('list.item.agreement');

Route::get('create-item-agreement',
    array_merge(['uses' => 'Superbackend\AgreementController@createItemAgreement'], $all_users))
    ->name('create.item.agreement');

/* * ****** End Agreement setting ********** */
