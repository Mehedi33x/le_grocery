<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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
Route::get('/',[HomeController::class,'home'])->name('home');

//Category
Route::get('/category',[CategoryController::class,'Category'])->name('category');
Route::get('/add_category',[CategoryController::class,'add_category'])->name('add.category');

//Product
Route::get('/product',[ProductController::class,'Product'])->name('product');
Route::get('/add_product',[ProductController::class,'add_product'])->name('add.product');
Route::post('/store_product',[ProductController::class,'product_store'])->name('product.store');
Route::get('/product_edit/{id}',[ProductController::class,'edit_product'])->name('product.edit');
Route::put('/product_update/{id}',[ProductController::class,'update_product'])->name('product.update');
Route::get('/single_product_view/{id}',[ProductController::class,'single_view_product'])->name('view.product');
Route::get('/single_product_delete/{id}',[ProductController::class,'single_product_delete'])->name('single.product.delete');

//role
Route::get('/Role_list',[RoleController::class,'Role_list'])->name('role.list');
Route::get('/role_Create',[RoleController::class,'Role_Create'])->name('role.create');
Route::post('/role_store',[RoleController::class,'Role.store'])->name('role.store');
