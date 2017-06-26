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


Route::group(['domain' => '{subdomain}.impexron.dev', 'middleware' => 'check_subdomain'], function () {

    Route::get('/rand', 'IndexController@rand');
    Route::get('/randb', 'IndexController@randb');
    Route::get('/url', 'IndexController@url');

    Route::get('/search', 'SearchController@search')->name('search');
    Route::get('/search_brand', 'SearchController@search_brand')->name('search_brand');

    Route::post('/request', 'RequestsController@request')->name('send_request');

    Route::get('/contacts', 'ContactController@index')->name('contacts');
    Route::get('/products', 'ProductController@index')->name('products');
    Route::get('/brands', 'BrandController@index')->name('brands');
    Route::get('/product/{url}', 'ProductController@show')->name('product.show');
    Route::get('/brand/{url}', 'BrandController@show')->name('brand.show');

    Route::post('/locale/{language}', 'LanguageController@save')->name('locale.change');

    Route::get('/', 'IndexController@index')->name('index');

});
//    Auth::routes();

//    Route::get('/home', 'HomeController@index')->name('home');



