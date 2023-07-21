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
// ---------------AdminRoutes---------------
Route::get('/admin123/home', function () {
    return view('admin.dashboard');
})->name('admin');

Route::get('/admin123/users', function () {
    return view('admin.users');
})->name('admin_users');

Route::get('/admin123/news', function () {
    return view('admin.news');
})->name('admin_news');

Route::get('/admin123/albums', function () {
    return view('admin.albums');
})->name('admin_albums');

Route::get('/admin123/emails', function () {
    return view('admin.emails');
})->name('admin_emails');



// ---------------UserRoutes---------------

Route::get('/', function () {
    return view('site.index');
})->name('home');

Route::get('/about', function () {
    return view('site.about');
})->name('about');

Route::get('/news', function () {
    return view('site.news');
})->name('news');

Route::get('/albums', function () {
    return view('site.albums');
})->name('albums');

Route::get('/contact', function () {
    return view('site.contact');
})->name('contact');
