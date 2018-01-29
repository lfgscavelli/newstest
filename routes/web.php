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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/os',  'ContentController@save');
Route::get('/oa',  'CustomerController@associate');
Route::get('/od',  'CustomerController@dissociate');
Route::get('/oc',  'CustomerController@create');
Route::get('/cp',  'CustomerController@product');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
