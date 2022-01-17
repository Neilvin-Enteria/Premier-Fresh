<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginWithGoogleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

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

// Dashboards / Homepages
Route::get('/', function () {
    $products = DB::table('products')
        ->whereIn('product_id', ['3', '4', '5', '6'])
        ->get();
   $bacons = DB::table('products')
    ->whereIn('product_type', ['Bacon'])
    ->get();
    $others = DB::table('products')
    ->whereIn('product_type', ['Other Products'])
    ->get();
    $hams = DB::table('products')
    ->whereIn('product_type', ['Ham'])
    ->get();
    return view('guest-homepage', compact('products', 'bacons'));
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $products = DB::table('products')
    ->whereIn('product_id', ['3', '4', '5', '6'])
    ->get();
    return view('dashboard', compact('products'));
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/about-us', function(){
    return view('about-us');
});

Route::get('/about-us', function(){
    return view('about-us-guest');
})->name('about-us-guest');

// Admin Dashboard
Route::get('/admin', [UserController::class, 'index'])->name('admin.index');
Route::delete('/admin/user/{id}', [UserController::class, 'delete'])->name('user.delete');


// Products Pages
Route::middleware(['auth:sanctum', 'verified'])->get('/bacon', function () {
    $bacons = DB::table('products')
    ->whereIn('product_type', ['Bacon'])
    ->get();
    return view('recipes.bacon', compact('bacons'));
})->name('bacon');

Route::middleware(['auth:sanctum', 'verified'])->get('/ham', function () {
    $hams = DB::table('products')
    ->whereIn('product_type', ['Ham'])
    ->get();
    return view('recipes.ham', compact('hams'));
})->name('ham');

Route::middleware(['auth:sanctum', 'verified'])->get('/sausages', function () {
    $sausages = DB::table('products')
    ->whereIn('product_type', ['Sausage'])
    ->get();
    return view('recipes.sausages', compact('sausages'));
})->name('sausages');

Route::middleware(['auth:sanctum', 'verified'])->get('/other-products', function () {
    $others = DB::table('products')
    ->whereIn('product_type', ['Other Products'])
    ->get();
    return view('recipes.other-products', compact('others'));
})->name('other-products');


//Recipe
Route::get('/recipe/bacon', function(){
    return view('recipe.bacon-recipe');
});

Route::get('/recipe/ham', function(){
    return view('recipe.ham-recipe');
});

Route::get('/recipe/other-products', function(){
    return view('recipe.others-recipe');
});

Route::get('/recipe/sausages', function(){
    return view('recipe.sausage-recipe');
});

// Products Resource
Route::resource('products', ProductController::class);

// Add Product
Route::get('/adminAdd', [ProductController::class, 'admin']);

// Cart Routes
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'updateCart'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');


// Google Login
Route::get('authorized/google', [LoginWithGoogleController::class, 'redirectToGoogle']);
Route::get('authorized/google/callback', [LoginWithGoogleController::class, 'handleGoogleCallback']);