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
    Route::get('dashboard', 'UserController@showDashboard')->name('admin.dashboard');
    Route::group(['prefix' => 'user'], function () {
        Route::get('list', 'UserController@getAll')->name('user.list');
        Route::get('search', 'UserController@search')->name('user.search');
        Route::middleware(['check.access'])->group(function () {
            Route::get('create-new', 'UserController@create')->name('user.create');
            Route::post('create-new', 'UserController@store');
            Route::get('{id}/delete', 'UserController@delete')->name('user.delete');
        });
        Route::get('{id}/edit', 'UserController@edit')->name('user.edit');
        Route::post('{id}/edit', 'UserController@update');
        Route::get('{id}/detail', 'UserController@userDetail')->name('user.detail');
        Route::get('{id}/change-password', 'UserController@changePass')->name('user.changePass');
        Route::post('{id}/change-password', 'UserController@updatePass');
    });
    Route::group(['prefix' => 'customer'], function () {
        Route::get('list', 'CustomerController@getAll')->name('customer.list');
        Route::get('search', 'CustomerController@search')->name('customer.search');
        Route::get('create-new', 'CustomerController@create')->name('customer.create');
        Route::post('create-new', 'CustomerController@store');
        Route::get('{id}/delete', 'CustomerController@delete')->name('customer.delete');
        Route::get('{id}/edit', 'CustomerController@edit')->name('customer.edit');
        Route::post('{id}/edit', 'CustomerController@update');
        Route::get('{id}/detail', 'CustomerController@customerDetail')->name('customer.detail');
    });
    Route::group(['prefix' => 'product'], function () {
        Route::get('list', 'ProductController@getAll')->name('product.list');
        Route::get('search', 'ProductController@search')->name('product.search');
        Route::get('create-new', 'ProductController@create')->name('product.create');
        Route::post('create-new', 'ProductController@store');
        Route::get('{id}/delete', 'ProductController@delete')->name('product.delete');
        Route::get('{id}/edit', 'ProductController@edit')->name('product.edit');
        Route::post('{id}/edit', 'ProductController@update');
        Route::get('{id}/detail', 'ProductController@productDetail')->name('product.detail');
    });
});

