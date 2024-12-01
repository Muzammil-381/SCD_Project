<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
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

Route::middleware('auth')->group(function () {
    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Product Routes
    Route::get('/products', [ProductController::class, 'index'])->name('products.index'); // List products
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create'); // Show form to create
    Route::post('/products', [ProductController::class, 'store'])->name('add_product'); // Store new product
    Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit'); // Show edit form
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update'); // Update product
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy'); // Delete product
});

// Public Website Routes
Route::prefix('/')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('about', [WebController::class, 'about'])->name('about'); // About page
    Route::get('blog', [WebController::class, 'blog'])->name('blog'); // Blog page
    Route::get('shop', [WebController::class, 'shop'])->name('shop'); // Shop page
    Route::get('productdetail', [WebController::class, 'productdetail'])->name('productdetail'); // Product details page
});

// Auth Routes
require __DIR__.'/auth.php';
