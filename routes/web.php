<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Auth::routes();
Route::middleware(['backprevent'])->get('/admin123/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('/admin/dashboard');
Route::middleware(['backprevent'])->post('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
Route::delete('/admin123/users/destroy/{id}', [App\Http\Controllers\UsersController::class, 'admin_destroy'])->name('admin.destroy');



Route::middleware(['auth','IsAdmin','backprevent'])->prefix('/admin123')->group(function()
{
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/users', UsersController::class);
    Route::resource('/albums', AlbumController::class);
    Route::resource('/news', NewsController::class);
    Route::resource('/messages', MessagesController::class);
});



// ---------------UserRoutes---------------

Route::get('', function () {
    return view('site.index');
})->name('home');

Route::get('/about', function () {
    return view('site.about');
})->name('about');

Route::get('/contact', function () {
    return view('site.contact');
})->name('contact');

Route::get('/news', [NewsController::class, 'index_site']);
Route::get('/news/{id}',[NewsController::class, 'news_click'])->name('news.click');

Route::get('/albums', [AlbumController::class, 'index_site']);
Route::get('/albums/{id}',[AlbumController::class, 'see_all'])->name('albums.click');

Route::resource('/about/student', StudentController::class);

