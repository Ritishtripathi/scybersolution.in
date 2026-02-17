<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

Route::get('/', [WebsiteController::class, 'index'])->name('website.home');
Route::get('/services', [WebsiteController::class, 'services'])->name('services');
Route::get('/contact-us', [WebsiteController::class, 'contact'])->name('contact');
Route::get('/career', [WebsiteController::class, 'career'])->name('career');
Route::get('/downloads', [WebsiteController::class, 'downloads'])->name('downloads');
Route::get('/guide', [WebsiteController::class, 'guide'])->name('guide');
