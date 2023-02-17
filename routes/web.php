<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LelangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ListlelangController;
use App\Http\Controllers\HistoriController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

//register
Route::get('register', [RegisterController::class, 'view'])->name('register')->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->name('register.store')->middleware('guest');

route::resource('barang',BarangController::class);
route::resource('lelang',LelangController::class);

//login
route::get('login',[LoginController::class, 'view'])->name('login')->middleware('guest');
route::post('login', [LoginController::class,'proses'])->name('login.proses')->middleware('guest');

//logout
route::get('logout',[LogoutController::class,'logout'])->name('logout-petugas');

//laman eror
Route::view('error/403', 'error.403')->name('error.403');

//admin
route::get('/dashboard/admin',[Dashboard::class,'admin'])->name('dashboard.admin')->middleware('auth', 'level:admin,petugas');
route::get('/barang/create',[BarangController::class,'create'])->name('barang.create')->middleware('auth','level:admin');

//petugas
route::get('/dashboard/petugas',[Dashboard::class,'petugas'])->name('dashboard.petugas')->middleware('auth','level:petugas');
route::get('/lelang/create',[LelangController::class,'create'])->name('lelang.create')->middleware('auth','level:petugas');

//masyarakat
route::get('/dashboard/masyarakat',[Dashboard::class,'masyarakat'])->name('dashboard.masyarakat')->middleware('auth','level:masyarakat');
route::get('/listlelang',[ListlelangController::class,'index'])->name('listlelang.index')->middleware('auth','level:masyarakat');
route::get('lelangs/{lelang}/penawaran', [HistoryLelangController::class, 'create'])->name('lelang.masyarakat.penawaran');
route::post('lelangs/{lelang}/penawaran', [HistoryLelangController::class, 'store'])->name('lelang.masyarakat.penawaran.store');










