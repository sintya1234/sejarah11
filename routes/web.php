<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Sej11LevelController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class,'loginWeb']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class,'storeWeb']);

Route::get('/kumpulan-materi', [Sej11LevelController::class, 'index']);
Route::get('/kumpulan-materi/{sej11_Level}', [Sej11LevelController::class, 'show']);

 <<<<<<< HEAD
Route::get('/register', function () {
    return view('register/index');
});

Route::get('/afterlogin', function () {
    return view('menu/afterlogin');
});
Route::get('/beforelogin', function () {
    return view('menu/beforelogin');
});
 =======
 >>>>>>> f99b5064a9114c7081c22b5e9520ec32285fa87c
