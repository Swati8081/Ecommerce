<?php

use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\OrderController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\WishlistController;
use Illuminate\Support\Facades\Route;



Route::post('/addToWishlist', [WishlistController::class, 'addToWishlist'])->name('addToWishlist')->middleware('auth');

Route::prefix('cart')->name('cart.')->controller(CartController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/add','add')->name('add');
    Route::post('/increase','increase')->name('increase');
    Route::post('/decrease', 'decrease')->name('decrease');
    Route::post('/remove', 'remove')->name('remove');
});
Route::prefix('wishlist')->name('wishlist.')->controller(WishlistController::class)->middleware('auth')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/add','add')->name('add');
    Route::post('/increase','increase')->name('increase');
    Route::post('/decrease', 'decrease')->name('decrease');
});


Route::get('/', [UserController::class, 'index'])->name('index');

Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/product', [UserController::class, 'product'])->name('product');
Route::get('/product-details/{id}', [UserController::class, 'product_details'])->name('product-details');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::get('/about', [UserController::class, 'about'])->name('about');




// cart 

Route::prefix('cart')->name('cart.')->controller(CartController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/add','add')->name('add');
    Route::post('/increase','increase')->name('increase');
    Route::post('/decrease', 'decrease')->name('decrease');
    Route::post('/remove', 'remove')->name('remove');
});


// wishlist

Route::prefix('wishlist')->name('wishlist.')->controller(WishlistController::class)->middleware('auth')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/add','add')->name('add');
    Route::post('/increase','increase')->name('increase');
    Route::post('/decrease', 'decrease')->name('decrease');
});

Route::get('/checkout', [OrderController::class, 'index'])->name('checkout');



Route::get('/dashboard', function () {
    return view('user.pages.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
