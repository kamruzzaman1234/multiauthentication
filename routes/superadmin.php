<?php

use App\Http\Controllers\SuperAdmin\SuperAdminController;
use Illuminate\Support\Facades\Route;

Route::prefix('superadmin')->group(function(){
    Route::middleware(['auth','role:superadmin'])->group(function(){
        Route::get('/dashboard', [SuperAdminController::class, 'index'])->name('superadmin.dashboard');
    });
    // Route::get('/dashboard', [SuperAdminController::class, 'index']);
});
