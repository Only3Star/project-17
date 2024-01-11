<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ProfileController;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//เมนู User
Route::get('admin/user/index',[UserController::class, 'index'])->name('u.index');
//เมนู Category
Route::get('admin/user/category',[CategoryController::class, 'category'])->name('u.category');
Route::get('admin/user/category/createform',[CategoryController::class, 'createform'])->name('u.category.createform');
Route::get('admin/user/category/edit/{id}',[CategoryController::class, 'edit']);
Route::post('admin/user/category/insert',[CategoryController::class, 'insert'])->name('u.category.edit');
//เมนู Product
Route::get('admin/user/product',[ProductController::class, 'product'])->name('u.product');
Route::get('admin/user/product/createform',[ProductController::class, 'createform'])->name('u.product.createform');
Route::get('admin/user/product/edit',[ProductController::class, 'edit'])->name('u.product.edit');