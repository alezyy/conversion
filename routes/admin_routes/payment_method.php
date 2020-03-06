<?php

/* * ****** Payment Method route ********** */

Route::get('list-payment-method',
    array_merge(['uses' => 'Superbackend\PayMethodController@indexMethods'], $all_users))->name('list.payment.method');

Route::get('create-payment-method',
    array_merge(['uses' => 'Superbackend\PayMethodController@createMethod'], $all_users))->name('create.payment.method');

