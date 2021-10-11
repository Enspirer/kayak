<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\NewsController;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('news', [NewsController::class, 'index'])->name('news.index');
Route::get('news/get-news', [NewsController::class, 'getNews'])->name('news.get_news');
Route::get('news/delete-news/{id}', [NewsController::class, 'deleteNews'])->name('articles.delete_news');