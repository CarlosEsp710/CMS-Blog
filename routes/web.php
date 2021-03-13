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

Route::redirect('/', 'blog');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

// Web
Route::get('blog', [App\Http\Controllers\Web\PageController::class, 'blog'])->name('blog');
Route::get('blog/{slug}', [App\Http\Controllers\Web\PageController::class, 'post'])->name('post');
Route::get('category/{slug}', [App\Http\Controllers\Web\PageController::class, 'category'])->name('category');
Route::get('tag/{slug}', [App\Http\Controllers\Web\PageController::class, 'tag'])->name('tag');
//Admin
Route::resource('tags', App\Http\Controllers\TagController::class);
Route::resource('categories', App\Http\Controllers\CategoryController::class);
Route::resource('posts', App\Http\Controllers\PostController::class);
