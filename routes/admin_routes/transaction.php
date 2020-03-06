<?php

Route::get('transaction-companies',
    array_merge(['uses' => 'Superbackend\TransactionController@indexTransactions'], $all_users))
    ->name('transaction.companies');

Route::get('fetch-transactions',
    array_merge(['uses' => 'Superbackend\TransactionController@fetchTransactionsData'], $all_users))
    ->name('fetch.transaction.companies');

Route::get('view-transactions/{id}',
    array_merge(['uses' => 'Superbackend\TransactionController@companyTransactionPdf'], $all_users))
    ->name('view.transaction.companies');

Route::get('export-transactions',
    array_merge(['uses' => 'Superbackend\TransactionController@accountingPdfExport'], $all_users))
    ->name('export.transactionPdf.companies');
