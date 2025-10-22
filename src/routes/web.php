<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login\AuthController;
use App\Http\Controllers\login\GenderController; 
use App\Http\Controllers\login\BirthDateController;
use App\Http\Controllers\login\ResidenceController;
use App\Http\Controllers\login\ConfirmationController;

// 認証関連のルート
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ✅ 性別選択ページ
Route::get('/gender', [GenderController::class, 'show'])
    ->middleware('auth') // ログインユーザーのみ
    ->name('gender.show');

Route::post('/gender', [GenderController::class, 'store'])
    ->middleware('auth')
    ->name('gender.store');

// 生年月日入力ページ
Route::get('/birth-date', [BirthDateController::class, 'show'])
    ->middleware('auth')
    ->name('birthdate.show');

Route::post('/birth-date', [BirthDateController::class, 'store'])
    ->middleware('auth')
    ->name('birthdate.store');

// 居住地入力ページ
Route::get('/residence', [ResidenceController::class, 'show'])
    ->middleware('auth')
    ->name('residence.show');

Route::post('/residence', [ResidenceController::class, 'store'])
    ->middleware('auth')
    ->name('residence.store');

// 確認ページ
Route::get('/confirmation', [ConfirmationController::class, 'show'])
    ->middleware('auth')
    ->name('confirmation.show');

Route::post('/confirmation', [ConfirmationController::class, 'store'])
    ->middleware('auth')
    ->name('confirmation.store');

// 確認ページ表示
Route::get('/confirmation', function () {
    return view('confirmation');
})->name('confirmation.show');

// 確認ページ送信（→ ダッシュボードへ）
Route::post('/confirmation', function () {
    // 編集された内容をここで保存したり更新したりする処理を入れてOK
    return redirect()->route('dashboard');
})->name('confirmation.submit');

// ダッシュボード（認証が必要）
Route::get('/dashboard', [AuthController::class, 'dashboard'])
    ->middleware('auth')
    ->name('dashboard');

// ホームページ
Route::get('/', function () {
    return view('welcome');
});

