<?php

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
    return view('indexView  ');
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

Route::get('/home',[\App\Http\Controllers\HomeController::class,'index']);
Route::get('/shop',[\App\Http\Controllers\ShopController::class,'index'])->name('shop');
Route::get('/about',[\App\Http\Controllers\AboutUsController::class,'index']);

Route::get('/userVerify',[\App\Http\Controllers\UserController::class,'checkLogin']);

Route::post('/editProduct',[\App\Http\Controllers\ShopController::class,'editItemRefresh'])->name('editProduct');
Route::post('/deleteProduct',[\App\Http\Controllers\ShopController::class,'deleteItemRefresh'])->name('deleteProduct');
Route::post('/addProduct',[\App\Http\Controllers\ShopController::class,'addItemRefresh'])->name('addProduct');

Route::get('/toJson',[\App\Http\Controllers\ShopController::class,'toJson'])->name('tojson');
