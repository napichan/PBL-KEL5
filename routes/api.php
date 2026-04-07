<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransaksiController;

Route::get('/users', [UserController::class, 'index']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/transaksi/{id_user}', [TransaksiController::class, 'getByUser']);

Route::get('/test', function () {
    return response()->json(['message' => 'API works!']);
});