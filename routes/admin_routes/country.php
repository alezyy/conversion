<?php

/* * ******  Country Start ********** */
Route::get('list-countries', array_merge(['uses' => 'Superbackend\CountryController@indexCountries'], $all_users))->name('list.countries');
Route::get('create-country', array_merge(['uses' => 'Superbackend\CountryController@createCountry'], $all_users))->name('create.country');
Route::post('store-country', array_merge(['uses' => 'Superbackend\CountryController@storeCountry'], $all_users))->name('store.country');
Route::get('edit-country/{id}', array_merge(['uses' => 'Superbackend\CountryController@editCountry'], $all_users))->name('edit.country');
Route::put('update-country/{id}', array_merge(['uses' => 'Superbackend\CountryController@updateCountry'], $all_users))->name('update.country');
Route::delete('delete-country', array_merge(['uses' => 'Superbackend\CountryController@deleteCountry'], $all_users))->name('delete.country');
Route::get('fetch-countries', array_merge(['uses' => 'Superbackend\CountryController@fetchCountriesData'], $all_users))->name('fetch.data.countries');
Route::put('make-active-country', array_merge(['uses' => 'Superbackend\CountryController@makeActiveCountry'], $all_users))->name('make.active.country');
Route::put('make-not-active-country', array_merge(['uses' => 'Superbackend\CountryController@makeNotActiveCountry'], $all_users))->name('make.not.active.country');
Route::get('sort-countries', array_merge(['uses' => 'Superbackend\CountryController@sortCountries'], $all_users))->name('sort.countries');
Route::get('country-sort-data', array_merge(['uses' => 'Superbackend\CountryController@countrySortData'], $all_users))->name('country.sort.data');
Route::put('country-sort-update', array_merge(['uses' => 'Superbackend\CountryController@countrySortUpdate'], $all_users))->name('country.sort.update');
/* * ****** End Country ********** */
