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

Route::get('/', 'ArticleController@index')->name('home');

Route::get('/register', 'UserController@create');
Route::post('/register', 'UserController@store');
Route::get('/login', 'UserController@index');
Route::post('/login', 'UserController@check');
Route::get('/logout', 'UserController@destroy');
Route::get('/profil', 'UserController@edit');
Route::get('/user', 'UserController@showUser');
Route::get('/admin', 'UserController@showAdmin');
Route::patch('/profil/{userId}/update', 'UserController@update');
Route::delete('/profil/{userId}/delete', 'UserController@delete');


Route::get('/article/create', 'ArticleController@create');
Route::post('/article/create', 'ArticleController@store');
Route::get('/article/{id}', 'ArticleController@show');
Route::get('/blog', 'ArticleController@blog');
Route::delete('/article/{id}/delete', 'ArticleController@destroy');
Route::get('/article/category/{name}', 'CategoryController@show');
