<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

// Public Routes
Route::get('/', [NewsController::class, 'home'])->name('home');
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');

// Admin CMS Routes
Route::resource('admin/news', NewsController::class)->except(['show']);

