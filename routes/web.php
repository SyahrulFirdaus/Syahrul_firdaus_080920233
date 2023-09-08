<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\McoaController;


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
    return view('/auth/login');
});
Route::middleware(['auth'])->group(function () {
    Route::post('/mcoa/customWarna', [McoaController::class, 'customWarna']);
    Route::get('/mcoa', [McoaController::class, 'index']);
    Route::post('/mcoa/store', [McoaController::class, 'store']);
    Route::get('/mcoa/{id}/edit', [McoaController::class, 'edit']);
    Route::put('/mcoa/{id}', [McoaController::class, 'update']);
    Route::delete('/mcoa/{id}', [McoaController::class, 'destroy']);

    Route::get('/mcoa/vdua', [McoaController::class, 'vdua']);

    Route::get('/mcoa/vPegawai', [McoaController::class, 'vPegawai']);
    Route::post('/mcoa/storePegawai', [McoaController::class, 'storePegawai']);
    Route::delete('/mcoa/vPegawai/{id}', [McoaController::class, 'destroyPegawai']);
    Route::get('/mcoa/{id}/editPegawai', [McoaController::class, 'editPegawai']);
    Route::put('/mcoa/vPegawai/{id}', [McoaController::class, 'updatePegawai']);
});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
