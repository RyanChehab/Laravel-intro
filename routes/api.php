<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//  App\Http\Controller\NewsController;
use app\Http\Controllers\NewsController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('news',[NewsController::class, 'index']);
Route::post('/news', [NewsController::class, 'store']);
Route::put('/news/{id}', [NewsController::class, 'update']);
Route::post('/news/{id}/restrictions', [NewsController::class, 'restrictions']);
