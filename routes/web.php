<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/home',[HomeController::class,'home'])->name('home');
Route::get('/',[HomeController::class,'home']);

//Category
Route::get('/category',[CategoryController::class,'Category'])->name('category');
Route::get('/add_category',[CategoryController::class,'add_category'])->name('add.category');

//Product
Route::get('/product',[ProductController::class,'Product'])->name('product');
