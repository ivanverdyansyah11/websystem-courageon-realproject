<?php

use App\Http\Controllers\AkademikController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HumasController;
use App\Http\Controllers\KesiswaanController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LogoMarsController;
use App\Http\Controllers\ManajemenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SaranaController;
use App\Http\Controllers\VisiMisiController;
use Illuminate\Support\Facades\Route;

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

Route::redirect('', '/homepage');
Route::redirect('/admin', '/admin/login');

Route::middleware(['guest'])->prefix('admin')->group(function () {
    // AUTHENTICATION
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'index')->name('login');
        Route::post('/login', 'loginAction')->name('login.action');

        Route::post('/logout', 'logout')->name('logout.action');
    });

    // DASHBOARD
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard-index');
    });

    // BERANDA
    Route::controller(BerandaController::class)->group(function () {
        Route::get('/beranda', 'index')->name('beranda-index');
        Route::get('/beranda/edit-header', 'editHeader');
        Route::post('/beranda/edit-header', 'updateHeader');
        Route::get('/beranda/edit-opening', 'editOpening');
        Route::post('/beranda/edit-opening', 'updateOpening');
        Route::get('/beranda/edit-remark', 'editRemark');
        Route::post('/beranda/edit-remark', 'updateRemark');
        Route::get('/beranda/edit-history', 'editHistory');
        Route::post('/beranda/edit-history', 'updateHistory');
    });

    // PROFIL
    Route::controller(ProfilController::class)->group(function () {
        Route::get('/profil', 'index')->name('profil-index');
        Route::get('/profil/edit-header', 'editHeader');
        Route::post('/profil/edit-header', 'updateHeader');
    });

    Route::controller(VisiMisiController::class)->group(function () {
        Route::get('/profil/visi-misi', 'index')->name('visi-misi-index');
        Route::get('/profil/visi-misi/edit-visi-misi', 'editVisionMission');
        Route::post('/profil/visi-misi/edit-visi-misi', 'updateVisionMission');
        Route::get('/profil/visi-misi/edit-motto', 'editMotto');
        Route::post('/profil/visi-misi/edit-motto', 'updateMotto');
    });

    Route::controller(LogoMarsController::class)->group(function () {
        Route::get('/profil/logo-mars', 'index')->name('logo-mars-index');
        Route::get('/profil/logo-mars/edit-logo', 'editLogo');
        Route::post('/profil/logo-mars/edit-logo', 'updateLogo');
        Route::get('/profil/logo-mars/edit-mars', 'editMars');
        Route::post('/profil/logo-mars/edit-mars', 'updateMars');
    });

    Route::controller(ManajemenController::class)->group(function () {
        Route::get('/profil/manajemen', 'index')->name('manajemen-index');
        Route::get('/profil/manajemen/tambah', 'create')->name('manajemen-create');
        Route::post('/profil/manajemen/tambah', 'store')->name('manajemen-store');
    });

    Route::controller(GuruController::class)->group(function () {
        Route::get('/profil/guru', 'index')->name('guru-index');
    });

    Route::controller(PegawaiController::class)->group(function () {
        Route::get('/profil/pegawai', 'index')->name('pegawai-index');
    });

    Route::controller(KontakController::class)->group(function () {
        Route::get('/profil/kontak', 'index')->name('kontak-index');
    });

    // AKADEMIK
    Route::controller(AkademikController::class)->group(function () {
        Route::get('/akademik', 'index')->name('akademik-index');
    });

    // KESISWAAN
    Route::controller(KesiswaanController::class)->group(function () {
        Route::get('/kesiswaan', 'index')->name('kesiswaan-index');
    });

    // SARANA & PRASARANA
    Route::controller(SaranaController::class)->group(function () {
        Route::get('/sarana', 'index')->name('sarana-index');
    });

    // HUMAS
    Route::controller(HumasController::class)->group(function () {
        Route::get('/humas', 'index')->name('humas-index');
    });
});
