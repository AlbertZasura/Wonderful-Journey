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
Route::get('/profil', 'UserController@edit')->middleware('isMember');
Route::get('/user', 'UserController@showUser')->middleware('isAdmin');
Route::get('/admin', 'UserController@showAdmin')->middleware('isAdmin');
Route::patch('/profil/{id}/update', 'UserController@update')->middleware('isMember');
Route::delete('/user/{id}/delete', 'UserController@delete')->middleware('isAdmin');


Route::get('/article/create', 'ArticleController@create')->middleware('isMember');
Route::post('/article/create', 'ArticleController@store')->middleware('isMember');
Route::get('/article/{id}', 'ArticleController@show');
Route::get('/blog', 'ArticleController@blog')->middleware('isMember');
Route::delete('/article/{id}/delete', 'ArticleController@destroy');
Route::get('/article/category/{name}', 'CategoryController@show');
