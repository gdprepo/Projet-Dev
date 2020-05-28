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

use App\Http\Resources\Product as ProductResource;
use App\Product;
use App\Http\Resources\Command as CommandResource;
use App\Command;
use App\Http\Resources\Category as CategoryResource;
use App\Category;

Route::get('/api/product', function () {
    return ProductResource::collection(Product::all());
});

Route::get('/api/category', function () {
    return CategoryResource::collection(Category::all());
});

Route::post('/api/login', 'ApiAuthenticationController@login')->name('api.login');
Route::get('/api/register', 'RegisterUserController@register')->name('api.register');

Route::post('/api/contact', 'ApiContactController@contact')->name('api.contact');
//Route::get('/api/mail', 'ApiContactController@mail')->name('api.mail');
Route::get('/api/command', 'ApiCommandController@index')->name('api.command');
Route::post('/api/validate-command', 'ValidateCommandController@validatecommand')->name('api.validatecommand');
Route::post('/api/confirmer-command', 'ConfirmerCommandController@confirmer')->name('api.confirmer');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout')->name('disconnect');
Route::get('/compte/{id}', 'HomeController@compte')->name('compte');
Route::post('/compte/check/{id}', 'HomeController@check')->name('compte.check');


Route::get('/categories', 'CategoryController@index')->name('category.list');
Route::get('/categories/add', 'CategoryController@add')->name('category.add');
Route::post('categories/create', 'CategoryController@store')->name('category.create');
Route::post('categories/delete/{id}', 'CategoryController@delete')->name('category.delete');

Route::get('/products', 'ProductController@index')->name('product.list');
Route::get('/products/add', 'ProductController@add')->name('product.add');
Route::post('products/update/{id}', 'ProductController@update')->name('product.update');
Route::post('products/create', 'ProductController@store')->name('product.create');
Route::post('products/delete/{id}', 'ProductController@delete')->name('product.delete');
Route::post('products/check/{id}', 'ProductController@check')->name('product.check');


