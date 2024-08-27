<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create', [App\Http\Controllers\HomeController::class, 'create'])->name('create');
Route::get('/sunting', [App\Http\Controllers\HomeController::class, 'sunting'])->name('sunting');
Route::get('/tampil', [App\Http\Controllers\HomeController::class, 'tampil'])->name('tampil');
Route::get('/create', [App\Http\Controllers\PostController::class, 'create'])->name('create');
Route::post('/store', [App\Http\Controllers\PostController::class, 'store'])->name('store');
Route::post('/update', [App\Http\Controllers\PostController::class, 'update'])->name('update');
Route::get('/delete/{id}', [App\Http\Controllers\PostController::class, 'delete'])->name('delete');




