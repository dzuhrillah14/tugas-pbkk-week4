<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Tugas 4 - Multi-View Profil Akademik
|--------------------------------------------------------------------------
|
| Semua halaman utama diarahkan ke satu PageController.
|
*/


/*
|--------------------------------------------------------------------------
| Halaman Beranda
|--------------------------------------------------------------------------
| URL:
| /
| /?user=Andi
| /?mode=dark
|
*/
Route::get('/', [PageController::class, 'index'])
    ->name('home');


/*
|--------------------------------------------------------------------------
| Halaman Profil Mahasiswa
|--------------------------------------------------------------------------
| URL:
| /profil-mahasiswa
| /profil-mahasiswa/5025221107
|
*/
Route::get('/profil-mahasiswa/{nrp?}', [PageController::class, 'profil'])
    ->name('mahasiswa.detail');


/*
|--------------------------------------------------------------------------
| Halaman Ide-Riset / Agentic AI
|--------------------------------------------------------------------------
| URL:
| /ide-agent
| /ide-agent?mode=dark
| /ide-agent/smart-lab-k3
|
*/
Route::get('/ide-agent/{tema?}', [PageController::class, 'agent'])
    ->name('agent.idea');


/*
|--------------------------------------------------------------------------
| Halaman Tambahan - Kalkulator IPK
|--------------------------------------------------------------------------
| URL:
| /hitung-ipk
| /hitung-ipk/3.75/3.80
|
*/
Route::get('/hitung-ipk/{ipk1?}/{ipk2?}', [PageController::class, 'ipkCalculator'])
    ->name('ipk.hitung');