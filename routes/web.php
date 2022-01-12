<?php


use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\sej11_soalController;
use App\Http\Controllers\Sej11LeaderboardController;
use App\Http\Controllers\Sej11LevelController;
use App\Http\Controllers\Sej11PengerjaanController;
use App\Http\Controllers\Sej11SoalController;
use App\Http\Controllers\Sej11UserLevelController;
use App\Http\Controllers\UserController;
use App\Models\sej11_soal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardLevelController;

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

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'loginWeb']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'storeWeb'])->middleware('guest');

Route::get('/kumpulan-materi', [Sej11LevelController::class, 'index'])->middleware('auth');
Route::get('/kumpulan-materi/{sej11_Level}', [Sej11LevelController::class, 'show'])->middleware('auth');

Route::get('/menu', function () {
    return view('/menu/index');
})->middleware('auth');;

Route::get('/quiz', [Sej11LevelController::class, 'quiz_index'])->middleware('auth');
Route::get('/quiz/{sej11_Level}', [Sej11LevelController::class, 'menu_play_show']);

//untuk soal get soal dan pilgan quiz, maap ku belum tau cara efesiennya 
Route::get('/quiz/{sej11_Level}/soal1', [Sej11LevelController::class, 'quiz_soal_show_1'])->middleware('auth');
Route::get('/quiz/{sej11_Level}/soal2', [Sej11LevelController::class, 'quiz_soal_show_2'])->middleware('auth');
Route::get('/quiz/{sej11_Level}/soal3', [Sej11LevelController::class, 'quiz_soal_show_3'])->middleware('auth');
Route::get('/quiz/{sej11_Level}/soal4', [Sej11LevelController::class, 'quiz_soal_show_4'])->middleware('auth');
Route::get('/quiz/{sej11_Level}/soal5', [Sej11LevelController::class, 'quiz_soal_show_5'])->middleware('auth');
Route::get('/quiz/{sej11_Level}/soal6', [Sej11LevelController::class, 'quiz_soal_show_6'])->middleware('auth');
Route::get('/quiz/{sej11_Level}/soal7', [Sej11LevelController::class, 'quiz_soal_show_7'])->middleware('auth');
Route::get('/quiz/{sej11_Level}/soal8', [Sej11LevelController::class, 'quiz_soal_show_8'])->middleware('auth');
Route::get('/quiz/{sej11_Level}/soal9', [Sej11LevelController::class, 'quiz_soal_show_9'])->middleware('auth');
Route::get('/quiz/{sej11_Level}/soal10', [Sej11LevelController::class, 'quiz_soal_show_10'])->middleware('auth');


//post

Route::post('/quiz/{sej11_Level}/soal1', [Sej11PengerjaanController::class, 'store_soal1'])->middleware('auth');
Route::post('/quiz/{sej11_Level}/soal2', [Sej11PengerjaanController::class, 'store_soal2'])->middleware('auth');
Route::post('/quiz/{sej11_Level}/soal3', [Sej11PengerjaanController::class, 'store_soal3'])->middleware('auth');
Route::post('/quiz/{sej11_Level}/soal4', [Sej11PengerjaanController::class, 'store_soal4'])->middleware('auth');
Route::post('/quiz/{sej11_Level}/soal5', [Sej11PengerjaanController::class, 'store_soal5'])->middleware('auth');
Route::post('/quiz/{sej11_Level}/soal6', [Sej11PengerjaanController::class, 'store_soal6'])->middleware('auth');
Route::post('/quiz/{sej11_Level}/soal7', [Sej11PengerjaanController::class, 'store_soal7'])->middleware('auth');
Route::post('/quiz/{sej11_Level}/soal8', [Sej11PengerjaanController::class, 'store_soal8'])->middleware('auth');
Route::post('/quiz/{sej11_Level}/soal9', [Sej11PengerjaanController::class, 'store_soal9'])->middleware('auth');
Route::post('/quiz/{sej11_Level}/soal10', [Sej11PengerjaanController::class, 'store_soal10'])->middleware('auth');


//Route::get('/quiz/{sej11_Level}/akhir_soal', [Sej11UserLevelController::class, 'akhir_soal']);
Route::get('/quiz/{sej11_Level}/leaderboard', [Sej11UserLevelController::class, 'leaderboard_show'])->middleware('auth');
Route::get('/leaderboard_utama', [Sej11LeaderboardController::class, 'index']);

Route::resource('/dashboard/levels', DashboardLevelController::class)->middleware('admin');
// Route::get('/dashboard/levels', DashboardLevelController::class, 'index')->middleware('auth');
// Route::get('/dashboard/levels/{sej11_level}', DashboardLevelController::class,'show')->middleware('auth');


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

Route::get('/leaderboard', function () {
    return view('/leaderboard');
});


Route::get('/soal', function () {
    return view('/quiz/soal/soal');
});
