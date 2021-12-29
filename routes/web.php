<?php

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

Route::get('/login', function () {
    return view('login/index');
});

Route::get('/register', function () {
    return view('register/index');
});

Route::get('/kumpulan-materi', [Sej11LevelController::class, 'index']);
Route::get('/kumpulan-materi/{sej11_Level}', [Sej11LevelController::class, 'show']);

