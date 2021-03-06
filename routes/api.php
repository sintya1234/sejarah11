<?php

use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Sej11_levelController;
use App\Http\Controllers\Api\Sej11_opsi_pilganController;
use App\Http\Controllers\Api\Sej11_soalController;
use App\Http\Controllers\Api\userController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [LoginController::class, 'login']);
Route::post('refresh', [LoginController::class, 'refresh']);
Route::apiResource('sej11_levels', Sej11_levelController::class);
Route::apiResource('sej11_opsi_pilgan', Sej11_opsi_pilganController::class);
Route::apiResource('sej11_soal', Sej11_soalController::class);

Route::group(['middleware' => 'auth:api'], function () {
    Route::apiResource('users', userController::class); 
    Route::post('logout', [LoginController::class, 'logout']);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
