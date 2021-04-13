<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/categories')->group(function(){

    Route::get('/', [App\Http\Controllers\CategoryController::class,'index'])->name('category.index');
    Route::get('/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
    Route::post('/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
    Route::get('/edit/{edit}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/update/{update}', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
    Route::post('/delete/{delete}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.destroy');
});

Route::prefix('/news')->group(function(){

    Route::get('/', [App\Http\Controllers\NewsController::class,'index'])->name('news.index');
    Route::get('/create', [App\Http\Controllers\NewsController::class, 'create'])->name('news.create');
    Route::post('/store', [App\Http\Controllers\NewsController::class, 'store'])->name('news.store');
    Route::get('/edit/{edit}', [App\Http\Controllers\NewsController::class, 'edit'])->name('news.edit');
    Route::post('/update/{update}', [App\Http\Controllers\NewsController::class, 'update'])->name('news.update');
    Route::post('/delete/{delete}', [App\Http\Controllers\NewsController::class, 'destroy'])->name('news.destroy');

});    