<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('hello', function () {
    return 'Hello ini laravel saya';
});

Route::get('tampilan/{nilai}', function ($nilai) {
    return 'Nilai saya adalah ' . $nilai;
});

Route::get('tambah/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil dari penjumlahan adalah ' . $nilai1 + $nilai2;
});
Route::get('kurang/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil dari pengurangan adalah ' . $nilai1 - $nilai2;
});
Route::get('kali/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil dari perkalian adalah ' . $nilai1 * $nilai2;
});
Route::get('bagi/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil dari pembagian adalah ' . $nilai1 / $nilai2;
});

Route::get('coba', function () {
    return view('coba');
});

Route::get('template', function () {
    return view('template');
});

Route::get('table', function () {
    $barang = ['meja', 'kursi', 'buku', 'pensil', 'lampu', 'laptop', 'pintu'];
    // return view('table', ['barang' => $barang]);   
    return view('table', compact('barang'));
});

Route::resource('siswa', SiswaController::class);

// Route::get('siswa', [SiswaController::class, 'index']);
// Route::get('tambahsiswa', [SiswaController::class, 'create']);

// Route::get('users/{id}', function ($id) {});
// Route::post('users/{id}', function ($id) {});
// Route::put('users/{id}', function ($id) {});
// Route::delete('users/{id}', function ($id) {});