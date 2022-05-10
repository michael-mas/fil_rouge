<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NousController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PayPalPaymentController;

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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

    route::get('/redirect', [HomeController::class,'redirect']);

    route::get('/', [HomeController::class,'index']);

    route::get('/product', [AdminController::class,'product']);

    route::post('/uploadproduct', [AdminController::class,'uploadproduct']);

    route::get('/showproduct', [AdminController::class,'showproduct']);

    route::get('/delete_product/{id}', [AdminController::class,'delete_product']);

    route::get('/update_product/{id}', [AdminController::class,'update_product']);

    route::post('/update_product_confirm/{id}', [AdminController::class,'update_product_confirm']);

    route::get('/product_details/{id}', [HomeController::class,'product_details']);

    route::get('/view_category', [AdminController::class,'view_category']);

    route::post('/add_category', [AdminController::class,'add_category']);

    route::get('/delete_category/{id}', [AdminController::class,'delete_category']);

    route::post('/add_cart/{id}', [HomeController::class,'add_cart']);

    route::get('/showcart', [HomeController::class,'showcart']);

    route::get('/deletecart/{id}', [HomeController::class,'deletecart']);

    route::post('/order', [HomeController::class,'confirmorder']);

    route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
    route::get('/shop/{slug}', [ShopController::class, 'show'])->name('shop.show');


    route::get('/paiement', [CheckoutController::class,'index'])->name('checkout.index');


Route::get('handle-payment', [PayPalPaymentController::class,'handlePayment'])->name('make.payment');
Route::get('cancel-payment', [PayPalPaymentController::class,'paymentCancel'])->name('cancel.payment');
Route::get('payment-success', [PayPalPaymentController::class,'paymentSuccess'])->name('success.payment');

route::get('/nous', [NousController::class,'index'])->name('nous.index');

    // Les autres routes avant

// Méthode fallback() en dernière position
Route::fallback(function() {
    return view('404'); // la vue 404.blade.php
 });

