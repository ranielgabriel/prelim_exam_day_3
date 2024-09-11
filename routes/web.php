<?php

use App\Http\Controller\ProfileController;
use App\Http\Controller\DashboardController;
use App\Http\Controller\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/products/create', [ProductController::class, 'create'])->name('create_product'); // Papunta sa UI
Route::post('/products/store', [ProductController::class, 'store'])->name('store_product'); // Pang save ng product sa DB
