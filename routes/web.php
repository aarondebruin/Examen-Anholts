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
// route om naar homepagina te gaan
Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->middleware('auth');
// route om naar dashboard tegaan
Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->middleware('auth');

Auth::routes(['register' => false]);
// Endpoint die gespushed gaat worden door de button voert @push uit in de shellyactionscontroller
Route::get('/push/{id}', 'App\Http\Controllers\shellyActionsController@push')->name('push');

// Slaat nieuwe button op
Route::post('store', [\App\Http\Controllers\DashboardController::class, 'store']);
// Verwijderd button
Route::delete('/destroy/{id}', [\App\Http\Controllers\DashboardController::class, 'destroy'])->name('destroy');


