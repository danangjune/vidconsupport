<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PermohonanController;

Route::get('/permohonan', [PermohonanController::class, 'create'])->name('permohonan.create');
Route::post('/permohonan', [PermohonanController::class, 'store'])->name('permohonan.store');
