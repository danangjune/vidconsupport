<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PermohonanController;

Route::get('/permohonan', [PermohonanController::class, 'create'])->name('permohonan.create');
Route::post('/permohonan', [PermohonanController::class, 'store'])->name('permohonan.store');
Route::get('/thankyou', function () {
    return view('permohonan/thankyou');
})->name('thankyou');
Route::get('/download-pdf/{id}', 'PermohonanController@downloadPDF')->name('download.pdf');

