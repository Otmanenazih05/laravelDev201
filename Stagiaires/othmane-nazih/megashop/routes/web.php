<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;

Route::get('/', [ShopController::class, 'index'])->name('accueil');
Route::get('/contact', [ShopController::class, 'contact'])->name('contact');
Route::get('/cgv', [ShopController::class, 'cgv'])->name('cgv');

Route::get('/categorie/{slug}', [ProductController::class, 'categorie'])->name('categorie');
Route::get('/produit/{id}', [ProductController::class, 'show'])->name('produit');
