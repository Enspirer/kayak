<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\NewsController;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('news', [NewsController::class, 'index'])->name('news.index');
Route::get('news/create', [NewsController::class, 'create'])->name('news.create');
Route::post('news/store', [NewsController::class, 'store'])->name('news.store');
Route::get('news/getdetails', [NewsController::class, 'getdetails'])->name('news.getdetails');
Route::get('news/edit/{id}', [NewsController::class, 'edit'])->name('news.edit');
Route::post('news/update', [NewsController::class, 'update'])->name('news.update');
Route::get('news/delete/{id}', [NewsController::class, 'destroy'])->name('news.destroy');