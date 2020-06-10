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
        Route::get('{id}/change-password', 'UserController@changePass')->name('user.changePass');
        Route::post('{id}/change-password', 'UserController@updatePass');
    });
    Route::prefix('category')->group(function (){
        Route::get('/','CategoryController@index')->name('category.index');
        Route::get('{id}/edit','CategoryController@edit')->name('category.edit');
        Route::post('{id}/edit','CategoryController@update')->name('category.update');
        Route::get('create','CategoryController@create')->name('category.create');
        Route::post('create','CategoryController@store')->name('category.store');
        Route::get('{id}/delete','CategoryController@destroy')->name('category.delete');
    });
    Route::prefix('product')->group(function (){
        Route::get('/','ProductController@index')->name('product.index');
        Route::get('create','ProductController@create')->name('product.create');
        Route::post('create','ProductController@store')->name('product.store');
    });
});

