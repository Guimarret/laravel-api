<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('api', [ApiController::class, 'getAll']);
Route::get('bands/store', [ApiController::class, 'store']);
Route::get('bands/gender/(gender}', [ApiController::class, 'getBandsByGender']);
Route::get('bands/{id}', [ApiController::class, 'getByID']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


