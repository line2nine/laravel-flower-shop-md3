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

Route::get('/', 'store\HomeController@index')->name('index');
Route::get('login', 'store\AuthController@showFormLogin')->name('login');
Route::post('login','store\AuthController@UserLogin');
Route::get('register', 'store\AuthController@register')->name('register');
Route::post('register', 'store\AuthController@store');
Route::get('account', 'store\AuthController@account')->name('account');
Route::get('forgot', 'store\AuthController@forgot')->name('forgot');
Route::post('forgot', 'store\AuthController@update')->name('update');
Route::get('logout', 'store\AuthController@logout')->name('logout');
//Route::get('wishlist', 'store\WishlistController@wishlist')->name('wishlist');

Route::group(['prefix' => 'wishlist'], function (){
    Route::get('/', 'store\WishlistController@view')->name('wishlist');
    Route::get('wishlist/{id}', 'store\WishlistController@add')->name('wishlist.add');
    Route::get('remove/{id}', 'store\WishlistController@remove')->name('wishlist.remove');

});

Route::group(['prefix' => 'cart'], function () {
    Route::get('add/{id}', 'store\CartController@add')->name('cart.add');
    Route::get('view', 'store\CartController@view')->name('cart.view');
    Route::get('remove/{id}', 'store\CartController@remove')->name('cart.remove');
    Route::get('clear', 'store\CartController@clear')->name('cart.clear');
    Route::get('update/{id}', 'store\CartController@update')->name('cart.update');
});
Route::group(['prefix' => 'checkout'], function (){
    Route::get('/','store\CheckoutController@form')->name('checkout');
    Route::post('/','store\CheckoutController@submit_form');
});
//Route::group(['prefix' => 'product'], function (){
// ggg   Route::get('details', 'store.ProductController@details')->name('details');
//});








Route::group(['prefix' => 'admin'], function () {
    Route::get('login', 'Auth\LoginController@showFormLogin')->name('admin.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::get('logout', 'Auth\LoginController@logout')->name('admin.logout');
    Route::get('dashboard', 'UserController@showDashboard')->name('admin.dashboard');
    Route::group(['prefix' => 'user'], function () {
        Route::get('list', 'UserController@getAll')->name('user.list');
        Route::get('create-new', 'UserController@create')->name('user.create');
        Route::post('create-new', 'UserController@store');
        Route::get('{id}/edit', 'UserController@edit')->name('user.edit');
        Route::post('{id}/edit', 'UserController@update');
        Route::get('{id}/change-password', 'UserController@changePass')->name('user.changePass');
        Route::post('{id}/change-password', 'UserController@updatePass');
        Route::get('{id}/detail', 'UserController@userDetail')->name('user.detail');
    });
    Route::prefix('category')->group(function (){
        Route::get('/','CategoryController@index')->name('category.index');
        Route::get('{id}/edit','CategoryController@edit')->name('category.edit');
        Route::post('{id}/edit','CategoryController@update')->name('category.update');
        Route::get('create','CategoryController@create')->name('category.create');
        Route::post('create','CategoryController@store')->name('category.store');
        Route::get('{id}/delete','CategoryController@destroy')->name('category.delete');
        Route::get('{id}/detail','CategoryController@detail')->name('category.detail');
    });
    Route::prefix('product')->group(function (){
        Route::get('/','ProductController@index')->name('product.index');
        Route::get('create','ProductController@create')->name('product.create');
        Route::post('create','ProductController@store')->name('product.store');
        Route::get('{id}/edit','ProductController@edit')->name('product.edit');
        Route::post('{id}/edit','ProductController@update')->name('product.update');
        Route::get('{id}/delete','ProductController@destroy')->name('product.delete');
        Route::get('{id}/detail','ProductController@detail')->name('product.detail');
    });
});


