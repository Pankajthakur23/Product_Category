<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('product')->name('product.')->group(function(){
    Route::get('create',[ProductController::class,'create']);
    Route::post('store',[ProductController::class,'store'])->name('store');
    Route::get('Index',[ProductController::class,'Index'])->name('Index');
    Route::get('edit/{id}',[ProductController::class,'edit'])->name('edit');
    Route::post('update/{product}',[ProductController::class,'update'])->name('update');
    Route::get('delete/{product}',[ProductController::class,'delete'])->name('delete');
});
Route::prefix('category')->name('category.')->group(function(){
    Route::get('create',[CategoryController::class,'create']);
    Route::post('store',[CategoryController::class,'store'])->name('store');
    Route::get('Index',[CategoryController::class,'Index'])->name('Index');
    Route::get('edit/{id}',[CategoryController::class,'edit'])->name('edit');
    Route::post('update/{category}',[CategoryController::class,'update'])->name('update');
    Route::get('delete/{category}',[CategoryController::class,'delete'])->name('delete');
});
