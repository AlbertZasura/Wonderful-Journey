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
    return view('pages/home');
});

Route::get('/kuta', function () {
    return view('pages/story');
});

Route::get('/category/beach', function () {
    return view('pages/category');
});

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/register', function () {
    return view('auth/register');
});

Route::get('/user', function () {
    return view('pages/user');
});

Route::get('/profil', function () {
    return view('pages/profil');
});

Route::get('/blog', function () {
    return view('blogs/blog');
});

Route::get('/blog/create', function () {
    return view('blogs/create');
});
