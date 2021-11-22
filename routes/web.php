<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\BloodpresureController;

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

Route::get('/', [BloodpresureController::class, 'index']);

Route::get('/f', [FactureController::class, 'index']);
Route::post('/f/fetch', [FactureController::class, 'fetch'])->name('fetch');