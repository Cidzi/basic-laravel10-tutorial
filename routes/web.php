<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about',[AdminController::class,'about'])->name('about');
Route::get('blog',[AdminController::class,'index'])->name('blog');
Route::get('create',[AdminController::class,'create']);
Route::fallback(function () {
    return "ไม่พบหน้านี้";
});