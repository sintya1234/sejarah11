<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\sej11_soalController;
use App\Http\Controllers\Sej11LevelController;
use App\Http\Controllers\Sej11SoalController;
use App\Http\Controllers\UserController;
use App\Models\sej11_soal;
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
    return view('home');
});

Route::get('/login', [LoginController::class, 'index']);
//->middleware('guest');
Route::post('/login', [LoginController::class,'loginWeb']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class,'storeWeb']);

Route::get('/kumpulan-materi', [Sej11LevelController::class, 'index']);
Route::get('/kumpulan-materi/{sej11_Level}', [Sej11LevelController::class, 'show']);

Route::get('/menu', function () {
    return view('/menu/index');
});

Route::get('/quiz', [Sej11LevelController::class, 'quiz_index']);
Route::get('/quiz/{sej11_Level}', [Sej11LevelController::class, 'menu_play_show']);

Route::get('/quiz/{sej11_Level}/soal1', [Sej11LevelController::class, 'quiz_soal_show']);

Route::post('logout', [LoginController::class, 'logoutWeb'])->middleware('auth');

Route::get('/profile/{user}/edit', [UserController::class, 'edit']);
Route::put('/profile/{user}', [UserController::class, 'update']);

Route::get('/profile', function () {
    return view('/profile/show');
});

Route::get('/afterlogin', function () {
     return view('menu/afterlogin');
 });
 Route::get('/beforelogin', function () {
     return view('menu/beforelogin');
 });
  
