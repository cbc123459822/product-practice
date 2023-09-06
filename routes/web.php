<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\FrontController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/product')->group(function () {
    Route::get('/list', [ProductController::class, 'index'])->name('product.index');
    
    Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/store', [ProductController::class, 'store'])->name('product.store');
    
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/update/{id}', [ProductController::class, 'update'])->name('product.update');
    
    Route::delete('/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
});

Route::resource('/type', TypeController::class);

Route::get('/playground', [FrontController::class, 'test']);
Route::post('/fetch/test', [FrontController::class, 'fetchTest']);




