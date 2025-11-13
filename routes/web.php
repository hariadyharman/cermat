<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\{
    CermatController,
    HasilUjianController,
    InputSoalController,
    LoginController,
    RegisterController,
    UserController
};

// =========================
// 🌐 HALAMAN UMUM
// =========================
Route::view('/', 'utama', ['title' => 'Utama', 'active' => 'utama']);
Route::view('/about', 'about', [
    'title' => 'Biodata',
    'name' => 'Azwa Nisyiatul Rizky',
    'email' => 'azwa_nisya@gmail.com',
    'image' => 'azwa.jpg',
    'active' => 'biodata',
]);

// =========================
// 🔐 AUTH (Guest Only)
// =========================
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);

    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
});

// =========================
// 🚪 LOGOUT (POST ONLY)
// =========================
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');

// =========================
// 🧭 DASHBOARD (LOGIN SAJA)
// =========================
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return redirect('/');
    })->name('dashboard');
});

// =========================
// 🧩 ADMIN & PESERTA
// =========================
Route::middleware('admin_peserta')->group(function () {
    Route::get('/dashboard/hasil', [HasilUjianController::class, 'index'])->name('hasil.index');
    Route::post('/simpan-hasil', [HasilUjianController::class, 'store'])->name('simpan.hasil');

    Route::controller(CermatController::class)->group(function () {
        Route::get('/dashboard/angka', 'angka')->name('cermat.angka');
        Route::get('/dashboard/huruf', 'huruf')->name('cermat.huruf');
        Route::get('/dashboard/kombinasi', 'kombinasi')->name('cermat.kombinasi');
        Route::get('/dashboard/simbol', 'simbol')->name('cermat.simbol');
    });
});

// =========================
// 👑 ADMIN AREA
// =========================
Route::middleware('admin')->prefix('dashboard')->group(function () {
    Route::get('/input_soal', [InputSoalController::class, 'index'])->name('input.soal');
    Route::get('/hasil/export-pdf', [HasilUjianController::class, 'exportPdf'])->name('hasil.exportPdf');
    Route::post('/hasil-ujian/reset', [HasilUjianController::class, 'reset'])->name('hasil-ujian.reset');

    Route::resource('/users', UserController::class);
    Route::patch('/users/{user}/update-role-ajax', [UserController::class, 'updateRole'])
        ->name('users.updateRole');
});

// =========================
// 🚫 FALLBACK UNTUK SEMUA URL TAK TERDAFTAR
// =========================
Route::fallback(function () {
    if (!Auth::check()) {
        // 🔒 Guest diarahkan ke halaman login
        return redirect('/login');
    }

    // 🔎 Jika sudah login tapi URL tidak ditemukan
    abort(404);
});
