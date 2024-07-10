<?php

// use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainController;

Route::get('/', [TrainController::class, 'index']);
Route::get('/trains{id}', [TrainController::class, 'show'])->name('trains.show');


