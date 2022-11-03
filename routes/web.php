<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');

// })->middleware(['auth', 'verified'])->name('/dashboard');

// Route::view('/add_product','form')->middleware(['auth', 'verified'])->name('/add_product');

Route::middleware(['auth','verified'])->group(function(){

     Route::view('/dashboard', 'dashboard')->name('/dashboard');
    // Route::view('/add_product','form')->name('/add_product');
    // Route::view('/view_product','view_product')->name('/view_product');
    // Route::view('/addCart_product','addCart_product')->name('/addCart_product');
    // add_product

    // Route::post('store',[ProductController::class,'store'])->name('store');
    Route::resource('product',ProductController::class);

    Route::get('addtoCart',[ProductController::class,'addtoCart'])->name('addtoCart');


    //cart routes
   // Route::get('products',[ProductController::class,'products'])->name('products');
    Route::get('cart', [ProductController::class, 'cart'])->name('cart');
    Route::get('addcart/{id}', [ProductController::class, 'addcart'])->name('addcart');
    Route::patch('updateCart', [ProductController::class, 'updateCart'])->name('updateCart');
    Route::delete('removeCart', [ProductController::class, 'removeCart'])->name('removeCart');

});

require __DIR__.'/auth.php';
