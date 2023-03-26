<?php

use App\Http\Controllers\LibrarianController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
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


// Return login view for librarians
Route::get('/login', [UserController::class, 'librarianLogin'])->name('login');

Route::middleware('auth')->group(function () {

    // Return dashboard view
    Route::get('/', [LibrarianController::class, 'index'])->name('dashboard');

    // Return login view for students
    Route::get('/login/student', [UserController::class, 'studentLogin'])->name('student login');

    // Authenticate Admin
    Route::post('/login/admin/authenticate', [LibrarianController::class, 'store']);

    // Return student approval list
    Route::get('/students/approval', [StudentController::class, 'approval'])->name('student approval');

    // Return student approved/registered list
    Route::get('/students/registered', [StudentController::class, 'registered'])->name('registered students');

    // Return student registration view
    Route::get('/register', [UserController::class, 'create'])->name('student register');

    // Log admin out
    Route::get('/logout', [UserController::class, 'destroy']);

});