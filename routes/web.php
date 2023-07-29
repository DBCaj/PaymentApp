<?php

use Illuminate\Support\Facades\Route;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaymentController;


//////////////// payment - start ////////////////

Route::get('/', [UserController::class, 'index']);
Route::post('pay', [PaymentController::class, 'pay'])->name('payment');
Route::get('success', [PaymentController::class, 'success']);
Route::get('error', [PaymentController::class, 'error']);

//////////////// payment - end ////////////////