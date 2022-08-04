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
route::get('', 'Auth\LoginController@loginView')->name('login.view')->middleware('guest');
route::post('/login', 'Auth\LoginController@login')->name('login')->middleware('guest');
Route::get('set/lang/{lang}', 'LangController@lang');
route::post('/logut', 'Auth\LoginController@logout')->name('logout')->middleware('auth:admin');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth:admin','namespace'=>'Dashboard', 'as' => 'dashboard.'], function () {
    Route::get('/', 'AdminController@index')->name('home');
    Route::resource('role', 'RoleController')->name('*','role')->except('show');
    Route::resource('permission', 'PermissionController')->name('*','permission')->except('show');


});
