<?php

Route::post('/register/email','Client\Register\RegisterAjaxController@email')->name('ajax.register.email');
Route::get('/register/provinces/{id}','Client\Register\RegisterAjaxController@provinces')->name('ajax.register.provinces');


