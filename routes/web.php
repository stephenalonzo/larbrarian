<?php

use App\Http\Controllers\LibrarianController;
use App\Http\Controllers\StudentController;
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

// Return dashboard view
Route::get('/', [LibrarianController::class, 'index'])->name('dashboard');

// Return student approval list
Route::get('/students/approval', [StudentController::class, 'approval'])->name('student approval');

// Return student approved/registered list
Route::get('/students/registered', [StudentController::class, 'registered'])->name('registered students');