<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Web\CategoriesController;
use App\Http\Controllers\Web\DashboardController;
use App\Http\Controllers\Web\PostsController;
use App\Http\Controllers\Web\UsersController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth;


Route::get('/login', [LoginController::class, 'formLogin'])->name('formLogin');
Route::post('/login', [LoginController::class, 'authentication'])->name('login');

Route::prefix('painel')->middleware('auth')->group(function (){
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    Route::prefix('posts')->name('post.')->group(function (){
        Route::get('/', [PostsController::class, 'index'])->name('index');
        Route::get('/create', [PostsController::class, 'create'])->name('create');
        Route::post('/store', [PostsController::class, 'store'])->name('store');
        Route::post('/edit', [PostsController::class, 'store'])->name('edit');
    });

    Route::prefix('categorias')->name('categories.')->group(function (){
        Route::get('/', [CategoriesController::class, 'index'])->name('index');
        Route::post('/store', [CategoriesController::class, 'store'])->name('store');
    });

    Route::prefix('users')->name('users.')->group(function (){
        Route::get('/', [UsersController::class, 'index'])->name('index');
        Route::post('/store', [UsersController::class, 'store'])->name('store');
    });
});
