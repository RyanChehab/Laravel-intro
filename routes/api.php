<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//  App\Http\Controller\NewsController;
use app\Http\Controllers\NewsController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('news',[NewsController::class, 'index']);
