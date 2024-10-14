<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HaberlerController;
use App\Http\Controllers\HakkimizdaController;
use App\Http\Controllers\IletisimController;
use App\Http\Controllers\GizlilikPolitikasiController;
use App\Http\Controllers\KvkkController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/haberler', [HaberlerController::class, 'index'])->name('haberler');
Route::get('/hakkimizda', [HakkimizdaController::class, 'index'])->name('hakkimizda');
Route::get('/iletisim', [IletisimController::class, 'index'])->name('iletisim');
Route::post('/iletisim', [IletisimController::class, 'submit'])->name('iletisim.submit');
Route::get('/gizlilik-politikasi', [GizlilikPolitikasiController::class, 'index'])->name('gizlilik-politikasi');
Route::get('/kvkk', [KvkkController::class, 'index'])->name('kvkk');