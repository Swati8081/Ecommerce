<?php

use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
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

Route::middleware('auth_admin')->prefix('admin')->name('admin.')->group(function(){

  Route::resource('category',CategoryController::class);
  Route::resource('product',ProductController::class);

});




Route::get('/admin/dashboard', function () {
    return view('admin.dashboard.index');
})->middleware(['auth_admin'])->name('admin.dashboard');
Route::get('/admin', function () {
    return view('admin.dashboard.index');
})->middleware(['auth_admin'])->name('admin');

Route::middleware('auth_admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
