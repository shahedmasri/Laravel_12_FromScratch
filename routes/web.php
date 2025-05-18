<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/second', function () {
    return view('second');
});

//Route::view('/second', 'second');
Route::view('/', 'home')->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('posts/{post}', [PostController::class, 'show'])
    ->name('post.show');
Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');
Route::view('article', 'article')->name('article');
