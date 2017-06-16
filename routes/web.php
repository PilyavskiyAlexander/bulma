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


    Route::get('/', 'IndexController@index')->name('index');
    Route::get('/products', 'ProductController@index')->name('products');
    Route::get('/products/{url}', 'ProductController@show')->name('product.show');
    Route::get('/brands', 'BrandController@index')->name('brands');
    Route::get('/brand/{url}', 'BrandController@show')->name('brand.show');

    Route::get('/search', 'SearchController@search')->name('search');

    Route::get('/locale/{language}', 'LanguageController@save')->name('locale.change');

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');


