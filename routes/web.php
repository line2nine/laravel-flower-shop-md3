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


    Route::prefix('admin')->group(function(){
        Route::prefix('category')->group(function (){
            Route::get('/','CategoryController@index')->name('category.index');
            Route::get('{id}/edit','CategoryController@edit')->name('category.edit');
            Route::post('{id}/edit','CategoryController@update')->name('category.update');
            Route::get('create','CategoryController@create')->name('category.create');
            Route::post('create','CategoryController@store')->name('category.store');
        });
    });
