<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AutherController;
use App\Http\Middleware\AuthArea;
use Illuminate\Support\Facades\Route;



Route::view("/", "components.dashboard.auth.login")->name('login');
Route::post("login", [AuthController::class, "login"])->name('login.post');

Route::view("register", "components.dashboard.auth.register")->name('register.get');
Route::post("register", [AuthController::class, "register"])->name('register.post');

Route::get('logout', [AuthController::class, "logout"])->name('logout');

Route::get('googleLogin', [AuthController::class, "GoogleLogin"])->name('GoogleLogin');
Route::get('dashboard/check/callback', [AuthController::class, "googleHandle"])->name('googleHandle');


Route::middleware([AuthArea::class])->group(function () {
    Route::get('/dashboard', [AuthController::class, "dashboard"])->name('welcome');
    Route::get('/JobList', [AutherController::class, "joblist"])->name('joblist');
    Route::get('users', [AutherController::class, 'index'])->name('index');

});


