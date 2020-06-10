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
//    Route::post('login','store\AuthController@UserLogin');


Route::get('register', 'Frontend\UserRegisterController@register')->name('register');
Route::post('register', 'Frontend\UserRegisterController@store')->name('register.store');
Route::get('account', 'Frontend\AccountController@account')->name('account');
Route::get('forgot', 'Frontend\ForgotPassword@forgot')->name('forgot');
Route::post('forgot', 'Frontend\ForgotPassword@update')->name('update');
Route::get('logout', 'Frontend\ForgotPassword@logout')->name('logout');
Route::get('logout', 'Frontend\ForgotPassword@logout')->name('logout');
Route::get('product-details', 'Frontend\HomeController@productDetails')->name('product.details');
Route::get('wishlist', 'Frontend\HomeController@wishlist')->name('wishlist');


Route::group(['prefix' => 'cart'], function () {
    Route::get('add/{id}', 'store\CartController@add')->name('cart.add');
    Route::get('view', 'store\CartController@view')->name('cart.view');
    Route::get('remove/{id}', 'store\CartController@remove')->name('cart.remove');
    Route::get('clear', 'store\CartController@clear')->name('cart.clear');
    Route::get('update/{id}', 'store\CartController@update')->name('cart.update');
});
//Route::group(['prefix' => 'checkout'], function (){
//    Route::get('/','Frontend\CheckoutController@form')->name('checkout');
//    Route::post('/','Frontend\CheckoutController@submit_form')->name('checkout');
//    Route::get('/checkout-success','Frontend\CheckoutController@success')->name('checkout.success');
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
    });
    Route::prefix('product')->group(function (){
        Route::get('/','ProductController@index')->name('product.index');
        Route::get('create','ProductController@create')->name('product.create');
        Route::post('create','ProductController@store')->name('product.store');
    });
});


