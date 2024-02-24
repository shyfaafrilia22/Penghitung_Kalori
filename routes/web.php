<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');



Route::get('/makanan', 'App\Http\Controllers\MakananController@index')->name('makanan');

Route::get('/minuman', 'App\Http\Controllers\MinumanController@index')->name('minuman');

Route::get('/tambah_makanan', function () {
    return view('tambah_makanan');
})->name('tambah_makanan');

Route::get('/tambah_minuman', function () {
    return view('tambah_minuman');
})->name('tambah_minuman');
