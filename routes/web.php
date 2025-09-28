<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('', [ProductController::class, 'index'])->name('product.index');
Route::get('create', [ProductController::class, 'create'])->name('product.create');
Route::post('store', [ProductController::class, 'store'])->name('product.store');
Route::get('show/{id}', [ProductController::class, 'show'])->name('product.show');
Route::post('update', [ProductController::class, 'update'])->name('product.update');
Route::get('delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
