<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PermohonanController;

Route::middleware(['web'])->group(function () {
    Route::get('/permohonan', [PermohonanController::class, 'create'])->name('permohonan.create');
    Route::post('/permohonan', [PermohonanController::class, 'store'])->name('permohonan.store');
    Route::get('/thankyou', [PermohonanController::class, 'thankyou'])->name('thankyou');
    Route::get('/download-pdf/{id}', [PermohonanController::class, 'downloadPDF'])->name('download.pdf');
});


