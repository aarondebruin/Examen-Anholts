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

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->middleware('auth');

Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->middleware('auth');

Auth::routes(['register' => false]);

Route::get('/push/{id}', 'App\Http\Controllers\shellyActionsController@push')->name('push');

Route::post('store', [\App\Http\Controllers\DashboardController::class, 'store']);
Route::delete('/destroy/{id}', [\App\Http\Controllers\DashboardController::class, 'destroy'])->name('destroy');


