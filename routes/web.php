<?php

use App\Http\Controllers\adminSoalDashboard;
use App\Http\Controllers\adminUserDashboard;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\sej11_soalController;
use App\Http\Controllers\Sej11LevelController;
use App\Http\Controllers\Sej11PengerjaanController;
use App\Http\Controllers\Sej11SoalController;
use App\Http\Controllers\Sej11UserLevelController;
use App\Http\Controllers\UserController;
use App\Models\sej11_soal;
use Illuminate\Support\Facades\Auth;
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
Route::post('/login', [LoginController::class, 'loginWeb']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'storeWeb']);

Route::get('/kumpulan-materi', [Sej11LevelController::class, 'index']);
Route::get('/kumpulan-materi/{sej11_Level}', [Sej11LevelController::class, 'show']);

Route::get('/menu', function () {
    return view('/menu/index');
});

Route::get('/quiz', [Sej11LevelController::class, 'quiz_index']);
Route::get('/quiz/{sej11_Level}', [Sej11LevelController::class, 'menu_play_show']);

//untuk soal get soal dan pilgan quiz, maap ku belum tau cara efesiennya 
Route::get('/quiz/{sej11_Level}/soal1', [Sej11LevelController::class, 'quiz_soal_show_1']);
Route::get('/quiz/{sej11_Level}/soal2', [Sej11LevelController::class, 'quiz_soal_show_2']);
Route::get('/quiz/{sej11_Level}/soal3', [Sej11LevelController::class, 'quiz_soal_show_3']);
Route::get('/quiz/{sej11_Level}/soal4', [Sej11LevelController::class, 'quiz_soal_show_4']);
Route::get('/quiz/{sej11_Level}/soal5', [Sej11LevelController::class, 'quiz_soal_show_5']);
Route::get('/quiz/{sej11_Level}/soal6', [Sej11LevelController::class, 'quiz_soal_show_6']);
Route::get('/quiz/{sej11_Level}/soal7', [Sej11LevelController::class, 'quiz_soal_show_7']);
Route::get('/quiz/{sej11_Level}/soal8', [Sej11LevelController::class, 'quiz_soal_show_8']);
Route::get('/quiz/{sej11_Level}/soal9', [Sej11LevelController::class, 'quiz_soal_show_9']);
Route::get('/quiz/{sej11_Level}/soal10', [Sej11LevelController::class, 'quiz_soal_show_10']);


//post

Route::post('/quiz/{sej11_Level}/soal1', [Sej11PengerjaanController::class, 'store_soal1']);
Route::post('/quiz/{sej11_Level}/soal2', [Sej11PengerjaanController::class, 'store_soal2']);
Route::post('/quiz/{sej11_Level}/soal3', [Sej11PengerjaanController::class, 'store_soal3']);
Route::post('/quiz/{sej11_Level}/soal4', [Sej11PengerjaanController::class, 'store_soal4']);
Route::post('/quiz/{sej11_Level}/soal5', [Sej11PengerjaanController::class, 'store_soal5']);
Route::post('/quiz/{sej11_Level}/soal6', [Sej11PengerjaanController::class, 'store_soal6']);
Route::post('/quiz/{sej11_Level}/soal7', [Sej11PengerjaanController::class, 'store_soal7']);
Route::post('/quiz/{sej11_Level}/soal8', [Sej11PengerjaanController::class, 'store_soal8']);
Route::post('/quiz/{sej11_Level}/soal9', [Sej11PengerjaanController::class, 'store_soal9']);
Route::post('/quiz/{sej11_Level}/soal10', [Sej11PengerjaanController::class, 'store_soal10']);


//Route::get('/quiz/{sej11_Level}/akhir_soal', [Sej11UserLevelController::class, 'akhir_soal']);
Route::get('/quiz/{sej11_Level}/leaderboard', [Sej11UserLevelController::class, 'leaderboard_show']);


Route::resource('/dashboard/students', adminUserDashboard::class);
Route::resource('/dashboard/soals', adminSoalDashboard::class);


Route::post('logout', [LoginController::class, 'logoutWeb'])->middleware('auth');

Route::get('/profile/{user}/edit', [UserController::class, 'edit']);
Route::put('/profile/{user}/show', [UserController::class, 'update']);

 Route::get('/profile', function () {
     return view('/profile/show');
 });

Route::get('/afterlogin', function () {
    return view('menu/afterlogin');
});
Route::get('/beforelogin', function () {
    return view('menu/beforelogin');
});

Route::get('/leaderboard', function () {
    return view('/leaderboard');
});


Route::get('/soal', function () {
    return view('/quiz/soal/soal');
});
