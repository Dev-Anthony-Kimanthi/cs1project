<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('v1/access/token', [PayController::class, 'generateAccessToken']);
Route::post('v1/hlab/stk/push', [PayController::class, 'STKPush']);

