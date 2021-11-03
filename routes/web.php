<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\provinsiController;
use App\Http\Controllers\rsController;
use App\Http\Controllers\sumberController;

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

Route::get('/', [indexController::class, 'index'])->name('index');
Route::get('/data-provinsi', [provinsiController::class, 'index'])->name('provinsi');
Route::get('/data-rs', [rsController::class, 'index'])->name('rs_rujukan');
Route::get('/sumber-data', [sumberController::class, 'index'])->name('sumber');


