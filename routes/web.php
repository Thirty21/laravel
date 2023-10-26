<?php

use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MapelController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('jurusan', [JurusanController::class, 'index']);
Route::get('mapel', [MapelController::class, 'index']);
Route::resource('jurusan', (JurusanController::class));
Route::resource('mapel', (MapelController::class));
