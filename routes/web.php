<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Auth;
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

Route::get('angka/{a}/{b}', function ($a, $b ) {
    return 'angka : '. $a;
});

Route::get('coba', function () {
    return view('coba');
});

Route::get('template', function () {
    return view('template');
});

Route::get('table', function () {
    $data = ['meja', 'kursi', 'lampu', 'pensil', 'pulpen'];
    // return view('table', ['data' => $data, 'barang' => $barang]);
    return view('table', compact('data'));
});

// Route::get('siswa', [SiswaController::class, 'index']);
// Route::get('tambahsiswa', [SiswaController::class, 'create']);

Route::resource('siswa', SiswaController::class)->middleware(['auth', 'admin']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
