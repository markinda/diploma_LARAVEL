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
    return view('index');
})->name('main');
Route::get('/about', function () {
    return view('/about');
})->name('about');

Route::get('/auth','UserController@index')->name('auth');
Route::post('/auth','UserController@store')->name('auth.store');
Route::get('/logout','UserController@logout')->name('logout');
Route::get('catalog','ProductController@index')->name('catalog');
Route::get('catalogFilter','ProductController@show')->name('catalogFilter');
Route::post('catalog','ProductController@index')->name('catalogClear');

Route::middleware('auth')->group(function (){
    Route::get('/admin/product/add', 'ProductController@create')->name('product.add');
    Route::post('/admin/product/add', 'ProductController@store')->name('admin.store');
    Route::post('/admin/product/{product}/destroy', 'ProductController@destroy')->name('product.destroy');
    Route::get('/admin/product/{id}/edit', 'ProductController@edit')->name('product.edit');
    Route::post('/admin/product/{id}/update', 'ProductController@update')->name('product.update');

});


