<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/teste', [UserController::class, 'test']);
Route::post('/envio', [UserController:: class, 'envio']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
