<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\IndexController;

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

//Route::get('/', function () {
//    return view('index');
//});

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index']);



Auth::routes();



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/push/{id}', 'App\Http\Controllers\shellyActionsController@push')->name('push');


