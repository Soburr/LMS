<?php

use App\Http\Controllers\PortalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterStudentController;
use App\Http\Controllers\LoginController;
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
    return view('homepage.index');
});

Route::get('/portal', function () {
    return view('dashboard');
});


Route::post('/log-in', [LoginController::class, 'login'])->name('log-in');
Route::get('/log-in', [LoginController::class, 'showLoginForm']);

Route::post('/sign-up', [RegisterStudentController::class, 'register'])->name('sign-up');
Route::get('/sign-up', [RegisterStudentController::class, 'showRegistrationForm']);

Route::get('/dashboard', [PortalController::class, 'dashboard'])->middleware('auth');
Route::get('/dashboard', [PortalController::class, 'index'])->middleware('auth');
Route::get('/logout', [PortalController::class, 'logout']);


require __DIR__.'/auth.php';
