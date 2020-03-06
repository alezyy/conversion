<?php

/* * ******  Industry route ********** */

Route::get('list-type-contenu-eblast',
    array_merge(['uses' => 'Superbackend\TypeEblastController@indexTypeEblast'], $all_users))
    ->name('list.type.cont.eblast');

Route::get('create-type-contenu-eblast',
    array_merge(['uses' => 'Superbackend\TypeEblastController@createTypeEblast'], $all_users))
    ->name('create.type.cont.eblast');
