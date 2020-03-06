<?php

/* * ******  Branch Contracts Start ********** */

Route::get('list-contracts-branches',
    array_merge(['uses' => 'Superbackend\BranchController@indexContractsBranches'],
        $all_users))->name('list.contracts.branches');

Route::get('create-contract-branch',
    array_merge(['uses' => 'Superbackend\BranchController@createContractBranch'],
        $all_users))->name('create.contract.branch');

Route::post('store-contract-branch',
    array_merge(['uses' => 'Superbackend\BranchController@storeContractBranch'],
        $all_users))->name('store.contract.branch');

Route::get('edit-contract-branch/{id}',
    array_merge(['uses' => 'Superbackend\BranchController@editContractBranch'],
        $all_users))->name('edit.contract.branch');

Route::put('update-contract-branch/{id}',
    array_merge(['uses' => 'Superbackend\BranchController@updateContractBranch'],
        $all_users))->name('update.contract.branch');


Route::put('sort-contract-branch',
    array_merge(['uses' => 'Superbackend\BranchController@sortContractBranch'],
        $all_users))->name('sort.contract.branch');


Route::delete('delete-contract-branch',
    array_merge(['uses' => 'Superbackend\BranchController@deleteContractBranch'],
        $all_users))->name('delete.contract.branch');

Route::get('fetch-contract-branches',
    array_merge(['uses' => 'Superbackend\BranchController@fetchContractsBranchesData'],
        $all_users))->name('fetch.data.contracts.branches');

Route::get('sort-branches',
    array_merge(['uses' => 'Superbackend\BranchController@sortBranches'], $all_users))->name('sort.contract.branch');
