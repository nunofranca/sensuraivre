<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Web\CommentsController;
use App\Http\Controllers\Web\Site\SiteController;
use App\Http\Controllers\Web\CategoriesController;
use App\Http\Controllers\Web\DashboardController;
use App\Http\Controllers\Web\ImagesController;
use App\Http\Controllers\Web\PostsController;
use App\Http\Controllers\Web\UsersController;
use Illuminate\Support\Facades\Route;


Route::get('/', [SiteController::class, 'index'])->name('site');
Route::get('/materia/{slug}', [SiteController::class, 'show'])->name('materia');
Route::get('/login', [LoginController::class, 'formLogin'])->name('formLogin');
Route::post('/login', [LoginController::class, 'authentication'])->name('login');

Route::prefix('painel')->middleware('auth')->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    Route::prefix('posts')->name('post.')->group(function () {
        Route::get('/', [PostsController::class, 'index'])->name('index');
        Route::get('/create', [PostsController::class, 'create'])->name('create');
        Route::post('/store', [PostsController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [PostsController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [PostsController::class, 'update'])->name('update');
        Route::delete('/destroy/{id}', [PostsController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('categorias')->name('categories.')->group(function () {
        Route::get('/', [CategoriesController::class, 'index'])->name('index');
        Route::post('/store', [CategoriesController::class, 'store'])->name('store');
    });

    Route::prefix('users')->name('users.')->group(function () {
        Route::get('/', [UsersController::class, 'index'])->name('index');
        Route::post('/store', [UsersController::class, 'store'])->name('store');
    });

    Route::prefix('images')->name('images.')->group(function () {
        Route::post('/store', [ImagesController::class, 'store'])->name('store');
    });

    Route::prefix('comentarios')->name('comments.')->group(function () {
        Route::post('/store', [CommentsController::class, 'store'])->name('store')->withoutMiddleware('auth');
        Route::get('/', [CommentsController::class, 'index'])->name('index');
    });

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
