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


Auth::routes();

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth', 'namespace' => 'Dashboard'], function () {
    Route::get('/', 'HomeController@index');
    Route::resource('Categories', 'CategoriesController');
    Route::resource('Posts', 'PostsController');
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/categories', 'HomeController@categories');
Route::get('/categories/{id}', 'HomeController@category');
Route::get('/posts', 'HomeController@posts');
Route::get('/categories/{cid}/{id}', 'HomeController@post');
