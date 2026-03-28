<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HealthinfoController;
use App\Http\Controllers\SessionController;
use App\Models\Appointment;
use App\Models\Healthinfo;
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
    Route::controller(HealthinfoController::class)->group(function() {
        Route::get('/create', 'create')->name('patients.create');
        Route::post('/store', 'store')->name('healthinfo.store');
        Route::get('/get-lgas/{state_id}', 'getLgas');
        Route::get('/patients', 'index')->name('patients.index');
        Route::get('edit-patient/{id}', 'edit')->name('patients.edit');
        Route::PATCH('update-patient/{id}', 'update')->name('patients.update');
        Route::delete('delete-patient/{id}', 'destroy')->name('patients.destroy');
    });

    Route::controller(Appointment::class)->group(function(){
        Route::get('/appointments', 'index')->name('appointments.index');
    });

    // APIs
    Route::get('/generate-hospital-no', function () {
        // Start from count
        $num = Healthinfo::count() + 1;

        $hospitalNo = 'HSP-' . str_pad($num, 5, '0', STR_PAD_LEFT);

        // Prevent duplicate
        while (Healthinfo::where('hospital_no', $hospitalNo)->exists()) {
            $num++;
            $hospitalNo = 'HSP-' . str_pad($num, 5, '0', STR_PAD_LEFT);
        }

        return response()->json([
            'hospital_no' => $hospitalNo
        ]);
    });
});
