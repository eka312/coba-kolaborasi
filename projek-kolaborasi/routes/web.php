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
Route::get('/', function () {
    return view('index');
});

Route::get('/master', function () {
    return view('master');
});;

Route::controller(AuthController::class)->group(function () {
    // Routing halaman login
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'authenticate')->name('login.submit');
});

Route::controller(WisataController::class)->group(function () {
    // Routing halaman data wisata
    Route::get('/data_wisata', 'index');

    // Routing tambah wisata
    Route::get('/tambah_wisata', 'create');
    Route::post('/tambah_wisata', 'store');

    // Routing ubah wisata
    Route::get('/ubah_wisata/{id}', 'edit');
    Route::post('/ubah_wisata/{id}', 'update')->name('edit_wisata');

    // Routing hapus wisata
    Route::get('/hapus_wisata/{id}', 'destroy');
});

Route::middleware(['auth'])->group(function () {
    
});

//routing halaman detail wisata
Route::get('/detail_wisata/{slug}', [WisataController::class, 'show'])->name('wisata.detail');

// Routing halaman logout
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');