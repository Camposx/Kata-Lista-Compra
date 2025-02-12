<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ShopListController;

Route::get('/list', [ShopListController::class, 'index'])->name('apiHome');
Route::post('/list', [ShopListController::class, 'store'])->name('apiStore');
Route::put('/list/{id}', [ShopListController::class, 'update'])->name('apiUpdate');
Route::delete('/list/{id}', [ShopListController::class, 'destroy'])->name('apiDestroy');