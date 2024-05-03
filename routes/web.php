<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;

//User Group
Route::get('/',[BlogController::class,'index']);
Route::get('/detail/{id}',[BlogController::class,'detail']);

//Customer
Route::get('/customers',[CustomerController::class,'customers'])->name('customers');
Route::get('/customer/{id}',[CustomerController::class,'customer'])->name('customer');

//Author Group
route::prefix('author')->group(function(){
Route::get('/blog',[AdminController::class,'index'])->name('blog');
Route::get('/create',[AdminController::class,'create']);
Route::post('/insert',[AdminController::class,'insert']);
Route::get('/delete/{id}',[AdminController::class,'delete'])->name('delete');
Route::get('/change/{id}',[AdminController::class,'change'])->name('change');
Route::get('/edit/{id}',[AdminController::class,'edit'])->name('edit');
Route::post('/update/{id}',[AdminController::class,'update'])->name('update');
//Route::fallback(function () {
//    return "ไม่พบหน้านี้";
//});
});

//Sale
Route::get('/sale',[SaleController::class,'sale']);
Route::post('/insertorder',[SaleController::class,'insertorder']);
//Route::get('/customer/{id}',[CustomerController::class,'customer'])->name('customer');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

