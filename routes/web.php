<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NovosController;
use App\Http\Controllers\SeminovosController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/novos', [NovosController::class, 'index']);
Route::get('/seminovos', [SeminovosController::class, 'index']);
