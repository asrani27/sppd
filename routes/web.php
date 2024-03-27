<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BibitController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MerkOliController;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SetoranController;
use App\Http\Controllers\DepositoController;
use App\Http\Controllers\JenisOliController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\ValidasiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PencairanController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\SparepartController;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\KonfigurasiController;
use App\Http\Controllers\PerhitunganController;
use App\Http\Controllers\SerahTerimaController;
use App\Http\Controllers\JenisLayananController;
use App\Http\Controllers\LupaPasswordController;
use App\Http\Controllers\GantiPasswordController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\RincianController;
use App\Http\Controllers\SPPDController;

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::get('lupa-password', [LupaPasswordController::class, 'index']);
Route::get('/reload-captcha', [LoginController::class, 'reloadCaptcha']);
Route::get('/logout', [LogoutController::class, 'logout']);

Route::get('/', [LoginController::class, 'index']);
Route::get('fitur', [FrontController::class, 'fitur']);
Route::get('tim', [FrontController::class, 'tim']);
Route::get('partner', [FrontController::class, 'partner']);
Route::get('hubungikami', [FrontController::class, 'hubungikami']);
Route::group(['middleware' => ['auth', 'role:superadmin']], function () {
    Route::get('superadmin', [HomeController::class, 'superadmin']);
    Route::get('superadmin/gp', [GantiPasswordController::class, 'index']);
    Route::post('superadmin/gp', [GantiPasswordController::class, 'update']);

    Route::get('superadmin/jabatan', [JabatanController::class, 'index']);
    Route::get('superadmin/jabatan/create', [JabatanController::class, 'create']);
    Route::post('superadmin/jabatan/create', [JabatanController::class, 'store']);
    Route::get('superadmin/jabatan/edit/{id}', [JabatanController::class, 'edit']);
    Route::post('superadmin/jabatan/edit/{id}', [JabatanController::class, 'update']);
    Route::get('superadmin/jabatan/delete/{id}', [JabatanController::class, 'delete']);

    Route::get('superadmin/pegawai', [PegawaiController::class, 'index']);
    Route::get('superadmin/pegawai/create', [PegawaiController::class, 'create']);
    Route::post('superadmin/pegawai/create', [PegawaiController::class, 'store']);
    Route::get('superadmin/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
    Route::post('superadmin/pegawai/edit/{id}', [PegawaiController::class, 'update']);
    Route::get('superadmin/pegawai/delete/{id}', [PegawaiController::class, 'delete']);

    Route::get('superadmin/sppd', [SPPDController::class, 'index']);
    Route::get('superadmin/sppd/create', [SPPDController::class, 'create']);
    Route::post('superadmin/sppd/create', [SPPDController::class, 'store']);
    Route::get('superadmin/sppd/edit/{id}', [SPPDController::class, 'edit']);
    Route::get('superadmin/sppd/pengikut/{id}', [SPPDController::class, 'pengikut']);
    Route::post('superadmin/sppd/pengikut/{id}', [SPPDController::class, 'simpanPengikut']);
    Route::get('superadmin/sppd/deletepengikut/{id}', [SPPDController::class, 'deletePengikut']);
    Route::post('superadmin/sppd/edit/{id}', [SPPDController::class, 'update']);
    Route::get('superadmin/sppd/delete/{id}', [SPPDController::class, 'delete']);
    Route::get('superadmin/rincian', [RincianController::class, 'index']);
    Route::get('superadmin/rincian/edit/{id}', [RincianController::class, 'edit']);
    Route::post('superadmin/rincian/edit/{id}', [RincianController::class, 'update']);
    Route::get('superadmin/rincian/print/{id}', [RincianController::class, 'print']);

    Route::get('superadmin/pembayaran', [PembayaranController::class, 'index']);
    Route::get('superadmin/pembayaran/print/{id}', [PembayaranController::class, 'print']);
    Route::get('superadmin/pembayaran/edit/{id}', [PembayaranController::class, 'edit']);
    Route::post('superadmin/pembayaran/edit/{id}', [PembayaranController::class, 'update']);

    Route::get('superadmin/laporan', [LaporanController::class, 'index']);
    Route::get('superadmin/laporan/pegawai', [LaporanController::class, 'pegawai']);
    Route::get('superadmin/laporan/bulanan', [LaporanController::class, 'bulanan']);
    Route::get('superadmin/laporan/jabatan', [LaporanController::class, 'jabatan']);
    Route::post('superadmin/laporan/periode', [LaporanController::class, 'periode']);
});

Route::group(['middleware' => ['auth', 'role:pemohon']], function () {
    Route::get('pemohon', [HomeController::class, 'pemohon']);
    Route::get('pemohon/gp', [GantiPasswordController::class, 'index']);
    Route::post('pemohon/gp', [GantiPasswordController::class, 'update']);
    Route::get('pemohon/pengajuan', [PengajuanController::class, 'index']);
    Route::get('pemohon/pengajuan/create', [PengajuanController::class, 'create']);
    Route::post('pemohon/pengajuan/create', [PengajuanController::class, 'store']);
    Route::get('pemohon/pengajuan/edit/{id}', [PengajuanController::class, 'edit']);
    Route::post('pemohon/pengajuan/edit/{id}', [PengajuanController::class, 'update']);
    Route::get('pemohon/pengajuan/delete/{id}', [PengajuanController::class, 'delete']);
    Route::get('pemohon/pengajuan/ajukan/{id}', [PengajuanController::class, 'ajukan']);
    Route::post('pemohon/pengajuan/bibit', [PengajuanController::class, 'storeBibit']);
    Route::get('pemohon/serahterima', [SerahTerimaController::class, 'pemohon_index']);
});
