<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controller\NewsController;
use App\Http\Controllers\RequestController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('news',[NewsController::class, 'index']);
Route::post('/news', [NewsController::class, 'store']);
Route::put('/news/{id}', [NewsController::class, 'update']);
Route::post('/news/{id}/restrictions', [NewsController::class, 'restrictions']);
Route::post('/news/requests', [RequestController::class, 'store']);
