<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CommentController;
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
    return view('landing');
})->name('landing');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('user.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/products', [ProductController::class, 'index'])->name('product.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/products/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/products/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/products/update', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/productsdelete/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/orders',[OrderController::class, 'index'])->name('order.index');
    Route::get('/orders/create', [OrderController::class, 'create'])->name('order.create');
    Route::post('/orders/store', [OrderController::class, 'store'])->name('order.store');
    Route::get('/orders/{id}', [OrderController::class, 'edit'])->name('order.edit');
    Route::post('/orders/update', [OrderController::class, 'update'])->name('order.update');
    Route::delete('/ordersdelete/{id}', [OrderController::class, 'destroy'])->name('order.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/comments', [CommentController::class, 'index'])->name('comment.index');
    Route::get('/comments/create', [CommentController::class, 'create'])->name('comment.create');
    Route::post('/comments/store', [CommentController::class, 'store'])->name('comment.store');
    Route::get('/comments/{id}', [CommentController::class, 'edit'])->name('comment.edit');
    Route::post('/comments/update', [CommentController::class, 'update'])->name('comment.update');
    Route::delete('/commentsdelete/{id}', [CommentController::class, 'destroy'])->name('comment.destroy');
});

Route::fallback(function () {
    return view('landing');
});
 
require __DIR__.'/auth.php';
