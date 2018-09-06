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

Route::get('/', 'AuthorController@index');
Route::get('/authors', 'AuthorController@index');
Route::get('authors/show/{id}', 'AuthorController@show');

Route::get('books/show/{id}', 'BookController@show');
Route::get('/dashboard', 'DashboardController@index');

Auth::routes();

Route::resource('books', 'BookController')->except([
  'show'])->middleware('auth');
Route::resource('authors', 'AuthorController')->only([
    'create', 'store', 'edit', 'update', 'destroy'
])->middleware('auth');
