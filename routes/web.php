<?php

use App\Http\Controllers\CetakController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\RekeningController;
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
    return redirect('/login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [HomeController::class,'index'])->name('dashboard');

    Route::resource('/rekening',RekeningController::class);
    Route::resource('/jurnal',JurnalController::class);
    Route::resource('/laporan',LaporanController::class);

    Route::get('cetak/{sesi}', [CetakController::class,'index']);
});
