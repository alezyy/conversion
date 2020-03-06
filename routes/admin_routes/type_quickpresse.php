<?php

/* * ******  Industry route ********** */

Route::get('list-type-quickpresse',
    array_merge(['uses' => 'Superbackend\TypeQpController@indexTypeQp'], $all_users))
    ->name('list.type.quickpresse');

Route::get('create-type-quickpresse',
    array_merge(['uses' => 'Superbackend\TypeQpController@createTypeQp'], $all_users))
    ->name('create.type.quickpresse');


