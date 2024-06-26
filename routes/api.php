<?php

use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/payment-handler', [OrderController::class, 'payment_handler']);
Route::get('/test-calculate', [OrderController::class, 'test_calculate']);
Route::post('/payment/success', [OrderController::class, 'payment_handler']);
