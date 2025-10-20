<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;

// 認証関連のルート
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ダッシュボード（認証が必要）
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');

// ホームページ
Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {

    // --- DMルート ---
    Route::get('/messages/{userId}', [MessageController::class, 'index'])->name('messages.index');
    Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');

    // --- ユーザー一覧・詳細 ---
    Route::get('/users', [UserController::class, 'index'])->name('users.index');

});