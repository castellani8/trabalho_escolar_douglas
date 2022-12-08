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
Route::resource('company', App\Http\Controllers\CompanyController::class);
Route::resource('fleet', App\Http\Controllers\FleetController::class);
Route::resource('maitenance', App\Http\Controllers\MaintenanceTypeController::class);
Route::resource('order', App\Http\Controllers\OrderController::class);
Route::resource('service', App\Http\Controllers\ServiceController::class);
Route::resource('service-order', App\Http\Controllers\ServiceOrderController::class);
Route::resource('service-type', App\Http\Controllers\ServiceTypeController::class);
