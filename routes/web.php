<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/* ================= AUTH ROUTES ================= */
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'registerPost']);

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'loginPost']);

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

/* ================= DASHBOARD ================= */
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth');

/* ================= CATEGORY / SUBCATEGORY / BRAND / PRODUCTS ================= */
Route::get('/category_view', [AuthController::class, 'category_view']);
Route::get('/sub_category_view', [AuthController::class, 'sub_category_view']);
Route::get('/brand_view', [AuthController::class, 'brand_view']);
Route::get('/product_view', [AuthController::class, 'product_view']);

/* ================= LAYOUT ================= */
Route::get('/main_header', [AuthController::class, 'main_header']);
Route::get('/footer', [AuthController::class, 'footer']);

/* ================= CONTACT ================= */
Route::get('/contact', [AuthController::class, 'contact']);
Route::post('/contact', [AuthController::class, 'contact']);

Route::get('/about', [AuthController::class, 'about']);
Route::post('/about', [AuthController::class, 'about']);

Route::get('/order_detail', [AuthController::class, 'order_detail'])->middleware('auth');
Route::post('/order_detail', [AuthController::class, 'order_detail']);

/* ================= CART ================= */
Route::post('/add-to-cart/{product}', [AuthController::class, 'add'])->middleware('auth');
Route::get('/cart', [AuthController::class, 'index'])->middleware('auth');

/* ================= CHECKOUT ================= */
Route::get('/checkout', [AuthController::class, 'checkout'])->middleware('auth');
Route::post('/checkout', [AuthController::class, 'store'])->middleware('auth');
