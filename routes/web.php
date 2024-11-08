<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});


Route::prefix('/')->group(function(){
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('about', [WebController::class, 'about'])->name('about');
    Route::get('blog', [WebController::class, 'blog'])->name('blog'); 
    Route::get('shop', [WebController::class, 'shop'])->name('shop');
    Route::get('productdetail', [WebController::class, 'productdetail'])->name('productdetail');

});

require __DIR__.'/auth.php';
