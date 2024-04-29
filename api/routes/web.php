<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

// HACK: 本来は以下のようにリソースルーティングを使用したいが、現仕様のルーティングに問題があるため、修正が必要。
// Route::resource('article', ArticleController::class);

Route::get('/', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/show/{id}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('/article', [ArticleController::class, 'store'])->name('article.store');
Route::get('/article/{article}/edit', [ArticleController::class, 'edit'])->name('article.edit');
Route::put('/article/{article}', [ArticleController::class, 'update'])->name('article.update');
Route::delete('/article/{id}', [ArticleController::class, 'destroy'])->name('article.destroy');