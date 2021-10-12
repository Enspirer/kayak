<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\ContactUsController;
use App\Http\Controllers\Backend\HomePageController;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('homepage_news/create', [HomePageController::class, 'create'])->name('homepage_news.create');
Route::post('homepage_news/store', [HomePageController::class, 'store'])->name('homepage_news.store');
Route::get('homepage_news/edit/{id}', [HomePageController::class, 'edit'])->name('homepage_news.edit');
Route::post('homepage_news/update', [HomePageController::class, 'update'])->name('homepage_news.update');

Route::get('news', [NewsController::class, 'index'])->name('news.index');
Route::get('news/create', [NewsController::class, 'create'])->name('news.create');
Route::post('news/store', [NewsController::class, 'store'])->name('news.store');
Route::get('news/getdetails', [NewsController::class, 'getdetails'])->name('news.getdetails');
Route::get('news/edit/{id}', [NewsController::class, 'edit'])->name('news.edit');
Route::post('news/update', [NewsController::class, 'update'])->name('news.update');
Route::get('news/delete/{id}', [NewsController::class, 'destroy'])->name('news.destroy');

Route::get('contact_us', [ContactUsController::class, 'index'])->name('contact_us.index');
Route::get('contact_us/getdetails', [ContactUsController::class, 'getDetails'])->name('contact_us.getDetails');
Route::get('contact_us/edit/{id}', [ContactUsController::class, 'edit'])->name('contact_us.edit');
Route::post('contact_us/update', [ContactUsController::class, 'update'])->name('contact_us.update');
Route::get('contact_us/delete/{id}', [ContactUsController::class, 'destroy'])->name('contact_us.destroy');