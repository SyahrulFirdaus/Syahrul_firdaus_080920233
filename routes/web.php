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

  
    Route::get('/mcoa/vtransaction', [McoaController::class, 'vtransaction']);
    Route::post('/mcoa/storeTransaction', [McoaController::class, 'storeTransaction']);
    Route::delete('/mcoa/vtransaction/{id}', [McoaController::class, 'destroyTransaction']);
    Route::get('/mcoa/{id}/editTransaction', [McoaController::class, 'editTransaction']);
    Route::put('/mcoa/vtransaction/{id}', [McoaController::class, 'updateTransaction']);

});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
