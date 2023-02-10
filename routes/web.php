<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LelangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;





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
    return view('welcome');
});

Route::get('register', [RegisterController::class, 'view'])->name('register')->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->name('register.store')->middleware('guest');

route::resource('barang',BarangController::class);
route::resource('lelang',LelangController::class);

route::get('login',[LoginController::class, 'view'])->name('login')->middleware('guest');
route::post('login', [LoginController::class,'proses'])->name('login.proses')->middleware('guest');
route::get('logout',[LogoutController::class,'logout'])->name('logout-petugas');

Route::view('error/403', 'error.403')->name('error.403');

route::get('/dashboard/admin',[Dashboard::class,'admin'])->name('dashboard.admin')->middleware('auth', 'level:admin,petugas');
route::get('/dashboard/petugas',[Dashboard::class,'petugas'])->name('dashboard.petugas')->middleware('auth','level:petugas');
route::get('/dashboard/masyarakat',[Dashboard::class,'masyarakat'])->name('dashboard.masyarakat')->middleware('auth','level:masyarakat');







