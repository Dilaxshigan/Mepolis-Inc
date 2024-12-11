<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\detailsController;
use App\Http\Controllers\transportController;

Route::get('/', [homeController::class, 'index2'])->name('index2');
Route::get('/Service', [homeController::class, 'services'])->name('services');
Route::get('/Contact', [homeController::class, 'contact'])->name('contact');
Route::get('/Request', [homeController::class, 'request'])->name('request');

Route::get('/About', [detailsController::class, 'about'])->name('about');
Route::get('/Privacy-policy', [detailsController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('/FAQ', [detailsController::class, 'FAQ'])->name('FAQ');
Route::get('/Terms', [detailsController::class, 'terms'])->name('terms');

Route::get('/Air-Transport', [transportController::class, 'air_transport'])->name('air_transport');
Route::get('/Train-Transport', [transportController::class, 'train_transport'])->name('train_transport');
Route::get('/Ocean-Transport', [transportController::class, 'ocean_transport'])->name('ocean_transport');
Route::get('/Express-Freight-solutions', [transportController::class, 'express_freight_solutions'])->name('express_freight_solutions');