<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\WebController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/search', [SearchController::class, 'search'])->name('search');


Route::middleware('auth')->group(function () {
    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Product Routes
    Route::get('/dashboard', [ProductController::class, 'index'])->name('dashboard'); // Home dashboard
    Route::get('/dashboard/products/create', [ProductController::class, 'create'])->name('products.create'); // Add new movie form
    Route::post('/dashboard/products', [ProductController::class, 'store'])->name('products.store'); // Store movie
    Route::get('/dashboard/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit'); // Edit movie
    Route::put('/dashboard/products/{product}', [ProductController::class, 'update'])->name('products.update'); // Update movie
    Route::delete('/dashboard/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy'); // Delete movie
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
    //category routes

    Route::get('/dashboard/categories', [CategoryController::class, 'index'])->name('categories.index'); // Show all categories
    Route::get('/dashboard/categories/create', [CategoryController::class, 'create'])->name('categories.create'); // Add new category form
    Route::post('/dashboard/categories', [CategoryController::class, 'store'])->name('categories.store'); // Store category
    Route::get('/dashboard/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit'); // Edit category
    Route::put('/dashboard/categories/{category}', [CategoryController::class, 'update'])->name('categories.update'); // Update category
    Route::delete('/dashboard/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
});

// Public Website Routes
Route::prefix('/')->group(function () {
    Route::get('/', [WebController::class, 'welcome'])->name('welcome'); // About page
    Route::get('about', [WebController::class, 'about'])->name('about'); // About page
    Route::get('blog', [WebController::class, 'blog'])->name('blog'); // Blog page
    Route::get('shop', [WebController::class, 'shop'])->name('shop'); // Shop page
    Route::get('productdetail/{id}', [WebController::class, 'productdetail'])->name('productdetail'); // Product details page
    Route::get('/order', [WebController::class, 'orders'])->name('orders');
    Route::get('/order_now', [WebController::class, 'order_now'])->name('order_now');
    });
    

// Auth Routes
require __DIR__.'/auth.php';
