<?php

/* * ******  Company Start ********** */
Route::get('list-branches',
    array_merge(['uses' => 'Superbackend\BranchController@indexBranches'], $all_users))->name('list.branches');

Route::get('create-branch',
    array_merge(['uses' => 'Superbackend\BranchController@createBranch'], $all_users))->name('create.branch');

Route::post('store-branch',
    array_merge(['uses' => 'Superbackend\BranchController@storeBranch'], $all_users))->name('store.branch');

Route::get('edit-branch/{id}',
    array_merge(['uses' => 'Superbackend\BranchController@editBranch'], $all_users))->name('edit.branch');

Route::put('update-branch/{id}',
    array_merge(['uses' => 'Superbackend\BranchController@updateBranch'], $all_users))->name('update.branch');

Route::delete('delete-branch',
    array_merge(['uses' => 'Superbackend\BranchController@deleteBranch'], $all_users))->name('delete.branch');

Route::get('fetch-branches',
    array_merge(['uses' => 'Superbackend\BranchController@fetchBranchesData'], $all_users))->name('fetch.data.branches');

Route::put('make-active-branch',
    array_merge(['uses' => 'Superbackend\BranchController@makeActiveBranch'], $all_users))->name('make.active.branch');

Route::put('make-not-active-branch',
    array_merge(['uses' => 'Superbackend\BranchController@makeNotActiveBranch'], $all_users))->name('make.not.active.branch');

Route::get('transaction-branches',
    array_merge(['uses' => 'Superbackend\TransactionController@indexTransactions'], $all_users))->name('transaction.branches');

Route::get('fetch-transactions',
    array_merge(['uses' => 'Superbackend\TransactionController@fetchTransactionsData'], $all_users))->name('fetch.transaction.branches');

Route::get('view-transactions/{id}',
    array_merge(['uses' => 'Superbackend\TransactionController@branchTransactionPdf'], $all_users))->name('view.transaction.branches');

Route::get('export-transactions',
    array_merge(['uses' => 'Superbackend\TransactionController@accountingPdfExport'], $all_users))->name('export.transactionPdf.branches');

