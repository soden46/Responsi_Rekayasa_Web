<?php

use App\Http\Controllers\MHSController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\ProdiController;
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

Route::resource('mahasiswa', MHSController::class);
Route::resource('kelas', KelasController::class);
Route::resource('prodi', ProdiController::class);
