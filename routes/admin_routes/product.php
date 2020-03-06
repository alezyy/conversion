<?php

/* * ******  Product Start ********** */

Route::get('list-products',
    array_merge(['uses' => 'Superbackend\ProductController@indexProducts'], $all_users))->name('list.products');

Route::get('create-product',
    array_merge(['uses' => 'Superbackend\ProductController@createProduct'], $all_users))->name('create.product');
