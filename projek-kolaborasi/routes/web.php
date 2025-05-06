<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WisataController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [AuthController::class, 'pageindex']);

Route::get('/master', [WisataController::class, 'master']);

Route::controller(AuthController::class)->group(function () {
    // Routing halaman login
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'authenticate')->name('login.submit');
});



Route::controller(WisataController::class)->group(function () {
    Route::get('/data_wisata','index');
    Route::get('/tambah_wisata','create');
    Route::post('/tambah_wisata','store');
    Route::get('/ubah_wisata/{id}','edit');
    Route::post('/ubah_wisata/{id}','update')->name('edit_wisata');
    Route::get('/hapus_wisata/{id}','destroy');
});


//routing halaman detail wisata
Route::get('/detail_wisata/{slug}', [WisataController::class, 'show'])->name('wisata.detail');
Route::get('/detail_kategori/{slug}', [WisataController::class, 'wisataByKategori']);


// Routing halaman logout
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');