<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HealthinfoController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'users.index');

// user login
Route::controller(SessionController::class)->group(function() {
    Route::post('/login', 'store');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [SessionController::class, 'destroy'])->name('logout');

    // patiant
    Route::get('/create', [HealthinfoController::class, 'create'])->name('patients.create');
});
