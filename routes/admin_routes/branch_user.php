<?php

/* * ******  Branch Users Start ********** */

Route::get('list-users-branches',
    array_merge(['uses' => 'Superbackend\BranchController@indexUserBranches'],
        $all_users))->name('list.users.branches');

Route::get('create-user-branch',
    array_merge(['uses' => 'Superbackend\BranchController@createUserBranch'],
        $all_users))->name('create.user.branch');

Route::post('store-user-branch',
    array_merge(['uses' => 'Superbackend\BranchController@storeUserBranch'],
        $all_users))->name('store.user.branch');

Route::get('edit-branch/{id}',
    array_merge(['uses' => 'Superbackend\BranchController@editUserBranch'],
        $all_users))->name('edit.user.branch');

Route::put('update-branch/{id}',
    array_merge(['uses' => 'Superbackend\BranchController@updateUserBranch'],
        $all_users))->name('update.user.branch');

Route::delete('delete-user-branch',
    array_merge(['uses' => 'Superbackend\BranchController@deleteUserBranch'],
        $all_users))->name('delete.user.branch');

Route::get('fetch-user-companies',
    array_merge(['uses' => 'Superbackend\BranchController@fetchUsersBranchesData'],
        $all_users))->name('fetch.data.users.branches');
