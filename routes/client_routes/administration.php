<?php
Route::get('/administration',function(){
    return view('client.administration.index');
})->name('client.administration');
