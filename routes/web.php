<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'admin'], function () {
    Route::get('login', 'Auth\LoginController@showFormLogin')->name('admin.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::get('logout', 'Auth\LoginController@logout')->name('admin.logout');
    Route::get('dashboard', 'UserController@showDashboard')->name('admin.dashboard');
    Route::group(['prefix' => 'user'], function () {
        Route::get('list', 'UserController@getAll')->name('user.list');
        Route::get('create-new', 'UserController@create')->name('user.create');
        Route::post('create-new', 'UserController@store');
        Route::get('{id}/change-password', 'UserController@changePass')->name('user.changePass');
        Route::post('{id}/change-password', 'UserController@updatePass');
    });
    Route::prefix('category')->group(function (){
        Route::get('/','CategoryController@index')->name('category.index');
        Route::get('{id}/edit','CategoryController@edit')->name('category.edit');
        Route::post('{id}/edit','CategoryController@update')->name('category.update');
        Route::get('create','CategoryController@create')->name('category.create');
        Route::post('create','CategoryController@store')->name('category.store');
    });
});

