<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\KrsController;
use App\Http\Controllers\JadwalController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('dosen', DosenController::class); 
Route::resource('mahasiswa', MahasiswaController::class); 
Route::resource('matakuliah', MatakuliahController::class); 
Route::resource('krs', KrsController::class);
Route::resource('jadwal', JadwalController::class);