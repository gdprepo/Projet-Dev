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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/categories', 'CategoryController@index')->name('category.list');

Route::post('categories/delete/{id}', 'CategoryController@delete')->name('category.delete');

Route::get('/products', 'ProductController@index')->name('product.list');
Route::get('/products/add', 'ProductController@add')->name('product.add');
Route::post('products/update', 'ProductController@create')->name('product.create');
Route::post('products/delete/{id}', 'ProductController@delete')->name('product.delete');