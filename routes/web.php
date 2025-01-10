<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('pages.welcome');
// });

Route::get('/dashboard', [HomepageController::class, 'home'])->name('dashboard');

Route::get('/login', [AuthController::class, 'showLoginPage'])->name('login');
Route::get('/register', [AuthController::class, 'showRegisterPage'])->name('register');

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/notif', function(){
    return view('pages.notif');
});

Route::get('/friend', function(){
    return view('pages.friend');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

