<?php

/* * ******  Industry route ********** */

Route::get('list-industries',
    array_merge(['uses' => 'Superbackend\IndustryController@indexIndustries'], $all_users))->name('list.industries');

Route::get('create-industry',
    array_merge(['uses' => 'Superbackend\IndustryController@createIndustry'], $all_users))->name('create.industry');

Route::post('store-industry',
    array_merge(['uses' => 'Superbackend\IndustryController@storeIndustry'], $all_users))->name('store.industry');

Route::get('sort-industries',
    array_merge(['uses' => 'Superbackend\IndustryController@sortIndustries'], $all_users))->name('sort.industries');

Route::get('fetch-industries',
    array_merge(['uses' => 'Superbackend\IndustryController@fetchIndustriesData'], $all_users))
    ->name('fetch.data.industries');

Route::delete('delete-industry',
    array_merge(['uses' => 'Superbackend\IndustryController@deleteIndustry'], $all_users))
    ->name('delete.industry');

Route::put('make-active-industry',
    array_merge(['uses' => 'Superbackend\IndustryController@makeActiveIndustry'], $all_users))
    ->name('make.active.industry');

Route::put('make-not-active-industry',
    array_merge(['uses' => 'Superbackend\IndustryController@makeNotActiveIndustry'], $all_users))
    ->name('make.not.active.industry');

Route::get('industry-sort-data',
    array_merge(['uses' => 'Superbackend\IndustryController@industrySortData'], $all_users))
    ->name('industry.sort.data');

Route::put('industry-sort-update',
    array_merge(['uses' => 'Superbackend\IndustryController@industrySortUpdate'], $all_users))
    ->name('industry.sort.update');
