<?php
Route::get('/templates',function(){
    return view('client.templates');
})->name('client.templates');
