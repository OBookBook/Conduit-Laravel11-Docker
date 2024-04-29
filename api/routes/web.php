<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', [ArticleController::class, 'index'])->name('article.index');

Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('/article', [ArticleController::class, 'store'])->name('article.store');

Route::get('/article/{article}/edit', [ArticleController::class, 'edit'])->name('article.edit');
Route::put('/article/{article}', [ArticleController::class, 'update'])->name('article.update');