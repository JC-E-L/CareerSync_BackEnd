<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('/login', [LoginController::class, 'login'])->name('user.login');
Route::post('/register', [RegisterController::class, 'store'])->name('user.store');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register',                     'index');
    Route::get('/register/{id}',                'show');
    Route::put('/register/update/{id}',         'update')->name('user.update');
    Route::put('/register/email/{id}',          'email')->name('user.email');
    Route::put('/register/password/{id}',       'password')->name('user.password');
    Route::delete('/register/{id}',             'destroy'); 
});





