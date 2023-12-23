<?php

use App\Http\Controllers\AdminController;
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
    return view('register');
});

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');

Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');
Route::get('/admin/{admin}/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('/admin/{admin}/update', [AdminController::class, 'update'])->name('admin.update');
Route::delete('/admin/{admin}/destroy', [AdminController::class, 'destroy'])->name('admin.destroy');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
