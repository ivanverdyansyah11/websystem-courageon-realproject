<?php

use App\Http\Controllers\AkademikController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HumasController;
use App\Http\Controllers\KesiswaanController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SaranaController;
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

Route::middleware(['guest'])->prefix('admin')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'index')->name('login');
        Route::post('/login', 'loginAction')->name('login.action');

        Route::post('/logout', 'logout')->name('logout.action');
    });

    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard-index');
    });

    Route::controller(BerandaController::class)->group(function () {
        Route::get('/beranda', 'index')->name('beranda-index');
        Route::get('/beranda/edit-header', 'editHeader')->name('header-edit');
        Route::post('/beranda/edit-header', 'updateHeader')->name('header-update');
        Route::get('/beranda/edit-opening', 'editOpening')->name('opening-edit');
        Route::post('/beranda/edit-opening', 'updateOpening')->name('opening-update');
    });

    Route::controller(ProfilController::class)->group(function () {
        Route::get('/profil', 'index')->name('profil-index');
    });

    Route::controller(AkademikController::class)->group(function () {
        Route::get('/akademik', 'index')->name('akademik-index');
    });

    Route::controller(KesiswaanController::class)->group(function () {
        Route::get('/kesiswaan', 'index')->name('kesiswaan-index');
    });

    Route::controller(SaranaController::class)->group(function () {
        Route::get('/sarana', 'index')->name('sarana-index');
    });

    Route::controller(HumasController::class)->group(function () {
        Route::get('/humas', 'index')->name('humas-index');
    });
});
