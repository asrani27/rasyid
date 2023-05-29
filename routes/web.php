<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TkrkController;
use App\Http\Controllers\AgamaController;
use App\Http\Controllers\LahirController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NikahController;
use App\Http\Controllers\UsahaController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\AdminSKController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AdminKrkController;
use App\Http\Controllers\KematianController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\KelahiranController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\TpermohonanController;
use App\Http\Controllers\LupaPasswordController;
use App\Http\Controllers\DaftarLayananController;
use App\Http\Controllers\GantiPasswordController;
use App\Http\Controllers\AdminPermohonanController;

Route::get('/', function () {
    if (Auth::check()) {
        if (Auth::user()->hasRole('superadmin')) {
            return redirect('superadmin');
        } elseif (Auth::user()->hasRole('pemohon')) {
            return redirect('pemohon');
        }
    }
    return redirect('/login');
});

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('daftar', [DaftarController::class, 'index']);
Route::post('daftar', [DaftarController::class, 'daftar']);
Route::get('lupa-password', [LupaPasswordController::class, 'index']);
Route::get('/reload-captcha', [LoginController::class, 'reloadCaptcha']);
Route::get('/logout', [LogoutController::class, 'logout']);


Route::group(['middleware' => ['auth', 'role:superadmin']], function () {
    Route::get('superadmin', [HomeController::class, 'superadmin']);
    Route::get('superadmin/gp', [GantiPasswordController::class, 'index']);
    Route::post('superadmin/gp', [GantiPasswordController::class, 'update']);
    Route::post('superadmin/sk/updatelurah', [HomeController::class, 'updatelurah']);

    Route::get('superadmin/sk', [AdminSKController::class, 'index']);
    Route::get('superadmin/sk/create', [AdminSKController::class, 'create']);
    Route::post('superadmin/sk/create', [AdminSKController::class, 'store']);
    Route::get('superadmin/sk/edit/{id}', [AdminSKController::class, 'edit']);
    Route::post('superadmin/sk/edit/{id}', [AdminSKController::class, 'update']);
    Route::get('superadmin/sk/delete/{id}', [AdminSKController::class, 'delete']);

    Route::get('superadmin/pendidikan', [PendidikanController::class, 'index']);
    Route::get('superadmin/pendidikan/create', [PendidikanController::class, 'create']);
    Route::post('superadmin/pendidikan/create', [PendidikanController::class, 'store']);
    Route::get('superadmin/pendidikan/edit/{id}', [PendidikanController::class, 'edit']);
    Route::post('superadmin/pendidikan/edit/{id}', [PendidikanController::class, 'update']);
    Route::get('superadmin/pendidikan/delete/{id}', [PendidikanController::class, 'delete']);

    Route::get('superadmin/agama', [AgamaController::class, 'index']);
    Route::get('superadmin/agama/create', [AgamaController::class, 'create']);
    Route::post('superadmin/agama/create', [AgamaController::class, 'store']);
    Route::get('superadmin/agama/edit/{id}', [AgamaController::class, 'edit']);
    Route::post('superadmin/agama/edit/{id}', [AgamaController::class, 'update']);
    Route::get('superadmin/agama/delete/{id}', [AgamaController::class, 'delete']);

    Route::get('superadmin/pengajuan', [PengajuanController::class, 'index']);
    Route::get('superadmin/pengajuan/create', [PengajuanController::class, 'create']);
    Route::post('superadmin/pengajuan/create', [PengajuanController::class, 'store']);
    Route::get('superadmin/pengajuan/edit/{id}', [PengajuanController::class, 'edit']);
    Route::post('superadmin/pengajuan/edit/{id}', [PengajuanController::class, 'update']);
    Route::get('superadmin/pengajuan/delete/{id}', [PengajuanController::class, 'delete']);

    Route::get('superadmin/desa', [DesaController::class, 'index']);
    Route::get('superadmin/desa/create', [DesaController::class, 'create']);
    Route::post('superadmin/desa/create', [DesaController::class, 'store']);
    Route::get('superadmin/desa/edit/{id}', [DesaController::class, 'edit']);
    Route::post('superadmin/desa/edit/{id}', [DesaController::class, 'update']);
    Route::get('superadmin/desa/delete/{id}', [DesaController::class, 'delete']);

    Route::get('superadmin/penduduk', [PendudukController::class, 'index']);
    Route::get('superadmin/penduduk/create', [PendudukController::class, 'create']);
    Route::post('superadmin/penduduk/create', [PendudukController::class, 'store']);
    Route::get('superadmin/penduduk/edit/{id}', [PendudukController::class, 'edit']);
    Route::post('superadmin/penduduk/edit/{id}', [PendudukController::class, 'update']);
    Route::get('superadmin/penduduk/delete/{id}', [PendudukController::class, 'delete']);

    Route::get('superadmin/nikah', [NikahController::class, 'index']);
    Route::get('superadmin/nikah/create', [NikahController::class, 'create']);
    Route::post('superadmin/nikah/create', [NikahController::class, 'store']);
    Route::get('superadmin/nikah/edit/{id}', [NikahController::class, 'edit']);
    Route::post('superadmin/nikah/edit/{id}', [NikahController::class, 'update']);
    Route::get('superadmin/nikah/delete/{id}', [NikahController::class, 'delete']);

    Route::get('superadmin/lahir', [LahirController::class, 'index']);
    Route::get('superadmin/lahir/create', [LahirController::class, 'create']);
    Route::post('superadmin/lahir/create', [LahirController::class, 'store']);
    Route::get('superadmin/lahir/edit/{id}', [LahirController::class, 'edit']);
    Route::post('superadmin/lahir/edit/{id}', [LahirController::class, 'update']);
    Route::get('superadmin/lahir/delete/{id}', [LahirController::class, 'delete']);

    Route::get('superadmin/mati', [KematianController::class, 'index']);
    Route::get('superadmin/mati/create', [KematianController::class, 'create']);
    Route::post('superadmin/mati/create', [KematianController::class, 'store']);
    Route::get('superadmin/mati/edit/{id}', [KematianController::class, 'edit']);
    Route::post('superadmin/mati/edit/{id}', [KematianController::class, 'update']);
    Route::get('superadmin/mati/delete/{id}', [KematianController::class, 'delete']);

    Route::get('superadmin/usaha', [UsahaController::class, 'index']);
    Route::get('superadmin/usaha/create', [UsahaController::class, 'create']);
    Route::post('superadmin/usaha/create', [UsahaController::class, 'store']);
    Route::get('superadmin/usaha/edit/{id}', [UsahaController::class, 'edit']);
    Route::post('superadmin/usaha/edit/{id}', [UsahaController::class, 'update']);
    Route::get('superadmin/usaha/delete/{id}', [UsahaController::class, 'delete']);

    Route::get('superadmin/laporan', [LaporanController::class, 'index']);
    Route::get('superadmin/laporan/penduduk', [LaporanController::class, 'penduduk']);
    Route::get('superadmin/laporan/desa', [LaporanController::class, 'desa']);
    Route::get('superadmin/laporan/nikah', [LaporanController::class, 'nikah']);
    Route::get('superadmin/laporan/usaha', [LaporanController::class, 'usaha']);
    Route::get('superadmin/laporan/pendidikan', [LaporanController::class, 'pendidikan']);
    Route::get('superadmin/laporan/lahir', [LaporanController::class, 'lahir']);
    Route::get('superadmin/laporan/kematian', [LaporanController::class, 'mati']);
});
