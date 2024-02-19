<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerpusController;

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
    return view('user.homepage');
});

Auth::routes();

Route::get('/homepage', [App\Http\Controllers\PerpusController::class, 'index'])->name('homepage');
Route::get('/dashboard', [App\Http\Controllers\PerpusController::class, 'dashboard'])->name('dashboard');
