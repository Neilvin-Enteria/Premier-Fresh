<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginWithGoogleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $products = DB::table('products')
        ->whereIn('product_id', ['3', '4', '5', '6'])
        ->get();
    return view('guest-homepage', compact('products'));
});

Route::get('/admin', [UserController::class, 'index'])->name('admin.index');
Route::delete('/admin/user/{id}', [UserController::class, 'delete'])->name('user.delete');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $products = DB::table('products')
    ->whereIn('product_id', ['3', '4', '5', '6'])
    ->get();
    return view('dashboard', compact('products'));
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/bacon', function () {
})->name('bacon');

Route::middleware(['auth:sanctum', 'verified'])->get('/ham', function () {
})->name('ham');

Route::middleware(['auth:sanctum', 'verified'])->get('/sausages', function () {
})->name('sausages');

Route::middleware(['auth:sanctum', 'verified'])->get('/other-products', function () {
})->name('other-products');

// Products
Route::resource('products', ProductController::class);

Route::get('/adminAdd', [ProductController::class, 'admin']);
// Route::get('/', [ProductController::class, 'index']);  
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'updateCart'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');

Route::get('authorized/google', [LoginWithGoogleController::class, 'redirectToGoogle']);
Route::get('authorized/google/callback', [LoginWithGoogleController::class, 'handleGoogleCallback']);