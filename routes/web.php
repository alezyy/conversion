<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$real_path = realpath(__DIR__) . DIRECTORY_SEPARATOR . 'front_routes' . DIRECTORY_SEPARATOR;

/* * ******** Admin Auth ************ */
include_once($real_path . 'admin_auth.php');
include_once($real_path . 'ajax.php');

Route::get('/', 'PublicController@welcome')->name('welcome');

Route::get('/pricing','PublicController@pricing')->name('pricing');

Route::get('/contact','PublicController@contact')->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('set-locale', 'LocalizationController@setLocale')->name('set.locale');












