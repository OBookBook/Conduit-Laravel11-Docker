<?php

use Illuminate\Support\Facades\Route;

// http://localhost:8080/
Route::get('/', function () {
    return view('home');
});

// http://localhost:8080/article
Route::get('/article', function () {
    return view('article');
});

// http://localhost:8080/create_edit_article
Route::get('/create_edit_article', function () {
    return view('create_edit_article');
});
