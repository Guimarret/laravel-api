<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', [ApiController::class, 'index']);
Route::get('/bands', [ApiController::class, 'allBands']);
Route::post('/bands/store', [ApiController::class, 'store']);
Route::get('/bands/gender/{gender}', [ApiController::class, 'getBandsByGender']);
Route::get('bands/{id}', [ApiController::class, 'getById']);