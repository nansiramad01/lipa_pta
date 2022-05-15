<?php

use App\Http\Controllers\BulanLaporanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\penerbitController;
use App\Http\Controllers\InputusersController;
use App\Http\Controllers\Lipa1Controlller;
use App\Http\Controllers\Rk1Controller;
use App\Http\Controllers\SatuankerjaController;
use App\Http\Controllers\TambahlaporanController;

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
    return view('beranda.index');
})->middleware('auth');


Route::get('profil', function () {
    return view('beranda.profil');
})->middleware('auth');


Route::resource('/bulanlaporan', BulanLaporanController::class);
Route::resource('/lipa1', Lipa1Controlller::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('penerbit', penerbitController::class);
Route::resource('satuankerja', SatuankerjaController::class);

Route::get('/kirim-laporan', [TambahlaporanController::class, 'index'])->middleware('auth');

Route::resource('LIPA 1', Lipa1Controlller::class);

Route::resource('rk1', Rk1Controller::class);


// Route::middleware('role:admin')->get('dashboard', function () {
//     return view('beranda.index');
// })->name('dashboard');

Route::get('/tambahusers', [InputusersController::class, 'index'])->middleware('auth');
Route::post('/tambahusers', [InputusersController::class, 'store'])->middleware('auth');
Route::get('/delete-bulan/{id}', [BulanLaporanController::class, 'destroy'])->middleware('auth');


Route::get('form/{id}', [TambahlaporanController::class, 'getForm']);
