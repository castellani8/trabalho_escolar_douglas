<?php

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

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Rotas para registrar itens
Route::resource('/register/company', App\Http\Controllers\RegisterController::class);
Route::get('/register/service', [App\Http\Controllers\RegisterController::class, 'service']);
Route::get('/register/serviceType', [App\Http\Controllers\RegisterController::class, 'serviceType']);
