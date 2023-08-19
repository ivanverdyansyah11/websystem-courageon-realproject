<?php

use App\Http\Controllers\AkademikController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DenahController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\HumasController;
use App\Http\Controllers\KelulusanController;
use App\Http\Controllers\KemitraanController;
use App\Http\Controllers\KesiswaanController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\LogoMarsController;
use App\Http\Controllers\MajalahController;
use App\Http\Controllers\ManajemenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PrasaranaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\SaranaController;
use App\Http\Controllers\SaranaPrasaranaController;
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

Route::redirect('', '/beranda');

Route::fallback(function () {
    return redirect('admin/login');
});

Route::controller(HomepageController::class)->group(function () {
    Route::get('/beranda', 'beranda')->name('beranda');
    Route::get('/profil', 'profil')->name('profil');
    Route::get('/akademik', 'akademik')->name('akademik');
    Route::get('/kesiswaan', 'kesiswaan')->name('kesiswaan');
    Route::get('/sarana-prasarana', 'saranaPrasarana')->name('sarana-prasarana');
    Route::get('/humas', 'humas')->name('humas');
    Route::get('/prestasi', 'prestasi')->name('prestasi');
    Route::get('/prestasi/{id}', 'detailPrestasi')->name('detail-prestasi');
    Route::get('/berita', 'berita')->name('berita');
    Route::get('/manajemen', 'manajemen')->name('manajemen');
    Route::get('/guru', 'guru')->name('guru');
    Route::get('/pegawai', 'pegawai')->name('pegawai');
    Route::get('/projek', 'projek')->name('projek');
    Route::get('/projek/{id}', 'detailProjek')->name('detail-projek');
    Route::get('/ekstrakurikuler/{id}', 'detailEkstrakurikuler')->name('detail-ekstrakurikuler');
    Route::get('/pelayanan-karir', 'pelayanan')->name('pelayanan');
    Route::get('/pelayanan-karir/{id}', 'detailPelayanan')->name('detail-pelayanan');
    Route::get('/sarana-prasarana/detail', 'detailSaranaPrasarana')->name('detail-sarana-prasarana');
});

Route::middleware('guest')->group(function () {
    Route::fallback(function () {
        return redirect(route('login'));
    });

    Route::prefix('admin')->group(function () {
        Route::controller(AuthController::class)->group(function () {
            Route::get('/login', 'index')->name('login');
            Route::post('/login', 'loginAction')->name('login.action');
            Route::get('/forgot-password', 'forgotPassword')->name('forgot-password');
            Route::post('/forgot-password', 'forgotPasswordAction')->name('forgot-password.action');
        });
    });
});

Route::middleware('auth')->group(function () {
    Route::fallback(function () {
        return redirect(route('dashboard-index'));
    });

    Route::prefix('admin')->group(function () {
        Route::controller(AuthController::class)->group(function () {
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
            Route::post('/profil/add-course', 'storeCourse')->name('mata-pelajaran-store');
            Route::get('/profil/edit-course/{id}', 'editCourse');
            Route::post('/profil/edit-course/{id}', 'updateCourse');
            Route::post('/profil/delete-course/{id}', 'deleteCourse');
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
            Route::get('/profil/manajemen/detail-section', 'detailSection')->name('section-manajemen-detail');
            Route::post('/profil/manajemen/edit-section', 'updateSection')->name('section-manajemen-update');

            Route::get('/profil/manajemen/detail/{id}', 'detail')->name('manajemen-detail');
            Route::get('/profil/manajemen/tambah', 'create')->name('manajemen-create');
            Route::post('/profil/manajemen/tambah', 'store')->name('manajemen-store');
            Route::get('/profil/manajemen/edit/{id}', 'edit')->name('manajemen-edit');
            Route::post('/profil/manajemen/edit/{id}', 'update')->name('manajemen-update');
            Route::post('/profil/manajemen/delete/{id}', 'delete')->name('manajemen-delete');
        });

        Route::controller(GuruController::class)->group(function () {
            Route::get('/profil/guru', 'index')->name('guru-index');
            Route::get('/profil/guru/detail-section', 'detailSection')->name('section-guru-detail');
            Route::post('/profil/guru/edit-section', 'updateSection')->name('section-guru-update');

            Route::get('/profil/guru/detail/{id}', 'detail')->name('guru-detail');
            Route::get('/profil/guru/tambah', 'create')->name('guru-create');
            Route::post('/profil/guru/tambah', 'store')->name('guru-store');
            Route::get('/profil/guru/edit/{id}', 'edit')->name('guru-edit');
            Route::post('/profil/guru/edit/{id}', 'update')->name('guru-update');
            Route::post('/profil/guru/delete/{id}', 'delete')->name('guru-delete');
        });

        Route::controller(PegawaiController::class)->group(function () {
            Route::get('/profil/pegawai', 'index')->name('pegawai-index');
            Route::get('/profil/pegawai/detail-section', 'detailSection')->name('section-pegawai-detail');
            Route::post('/profil/pegawai/edit-section', 'updateSection')->name('section-pegawai-update');

            Route::get('/profil/pegawai/detail/{id}', 'detail')->name('pegawai-detail');
            Route::get('/profil/pegawai/tambah', 'create')->name('pegawai-create');
            Route::post('/profil/pegawai/tambah', 'store')->name('pegawai-store');
            Route::get('/profil/pegawai/edit/{id}', 'edit')->name('pegawai-edit');
            Route::post('/profil/pegawai/edit/{id}', 'update')->name('pegawai-update');
            Route::post('/profil/pegawai/delete/{id}', 'delete')->name('pegawai-delete');
        });

        Route::controller(KontakController::class)->group(function () {
            Route::get('/profil/kontak', 'index')->name('kontak-index');
            Route::get('/profil/kontak/detail-section', 'detailSection')->name('section-kontak-detail');
            Route::post('/profil/kontak/edit-section', 'updateSection')->name('section-kontak-update');

            Route::post('/profil/kontak/tambah-contact', 'storeContact')->name('kontak-store');
            Route::get('/profil/kontak/detail-contact/{id}', 'detailContact')->name('kontak-detail');
            Route::post('/profil/kontak/edit-contact/{id}', 'updateContact')->name('kontak-update');
            Route::post('/profil/kontak/delete-contact/{id}', 'deleteContact')->name('kontak-delete');
        });

        // AKADEMIK
        Route::controller(AkademikController::class)->group(function () {
            Route::get('/akademik', 'index')->name('akademik-index');
            Route::get('/akademik/detail-header', 'detailHeader');
            Route::post('/akademik/edit-header', 'updateHeader');
        });

        Route::controller(KurikulumController::class)->group(function () {
            Route::get('/akademik/kurikulum', 'index')->name('kurikulum-index');
            Route::get('/akademik/kurikulum/detail-header', 'detailHeader');
            Route::post('/akademik/kurikulum/edit-header', 'updateHeader');
        });

        Route::controller(ProgramController::class)->group(function () {
            Route::get('/akademik/program', 'index')->name('program-index');
        });

        Route::controller(ProyekController::class)->group(function () {
            Route::get('/akademik/proyek', 'index')->name('proyek-index');
        });

        Route::controller(KelulusanController::class)->group(function () {
            Route::get('/akademik/kelulusan', 'index')->name('kelulusan-index');
        });

        // KESISWAAN
        Route::controller(KesiswaanController::class)->group(function () {
            Route::get('/kesiswaan', 'index')->name('kesiswaan-index');
        });

        // SARANA & PRASARANA
        Route::controller(SaranaController::class)->group(function () {
            Route::get('/sarana-prasarana', 'index')->name('sarana-index');
            Route::get('/sarana-prasarana/detail-header', 'detailHeader');
            Route::post('/sarana-prasarana/edit-header', 'updateHeader');
        });

        Route::controller(PrasaranaController::class)->group(function () {
            Route::get('/sarana-prasarana/prasarana', 'index')->name('prasarana-index');
            Route::get('/sarana-prasarana/prasarana/detail-section', 'detailSection');
            Route::post('/sarana-prasarana/prasarana/edit-section', 'updateSection');

            Route::post('/sarana-prasarana/prasarana/tambah-prasarana', 'storePrasarana')->name('prasarana-store');
            Route::get('/sarana-prasarana/prasarana/detail-prasarana/{id}', 'detailPrasarana');
            Route::post('/sarana-prasarana/prasarana/edit-prasarana/{id}', 'updatePrasarana');
            Route::post('/sarana-prasarana/prasarana/delete-prasarana/{id}', 'deletePrasarana');
        });

        Route::controller(DenahController::class)->group(function () {
            Route::get('/sarana-prasarana/denah', 'index')->name('denah-index');
            Route::get('/sarana-prasarana/denah/detail-section', 'detailSection');
            Route::post('/sarana-prasarana/denah/edit-section', 'updateSection');

            Route::post('/sarana-prasarana/denah/tambah-ruangan', 'storeRoom')->name('ruangan-store');
            Route::get('/sarana-prasarana/denah/detail-ruangan/{id}', 'detailRoom');
            Route::post('/sarana-prasarana/denah/edit-ruangan/{id}', 'updateRoom');
            Route::post('/sarana-prasarana/denah/delete-ruangan/{id}', 'deleteRoom');
        });

        // HUMAS
        Route::controller(HumasController::class)->group(function () {
            Route::get('/humas', 'index')->name('humas-index');
            Route::get('/humas/detail-header', 'detailHeader');
            Route::post('/humas/edit-header', 'updateHeader');
        });

        Route::controller(KemitraanController::class)->group(function () {
            Route::get('/humas/kemitraan', 'index')->name('kemitraan-index');
            Route::get('/humas/kemitraan/detail-header', 'detailHeader');
            Route::post('/humas/kemitraan/edit-header', 'updateHeader');
            Route::post('/humas/kemitraan/tambah-kemitraan', 'storePartnership')->name('kemitraan-store');
            Route::get('/humas/kemitraan/detail-kemitraan/{id}', 'detailPartnership');
            Route::post('/humas/kemitraan/edit-kemitraan/{id}', 'updatePartnership');
            Route::post('/humas/kemitraan/delete-kemitraan/{id}', 'deletePartnership');
        });

        Route::controller(MajalahController::class)->group(function () {
            Route::get('/humas/majalah', 'index')->name('majalah-index');
            Route::get('/humas/majalah/detail-header', 'detailHeader');
            Route::post('/humas/majalah/edit-header', 'updateHeader');

            Route::post('/humas/majalah/tambah-majalah', 'storeJournal')->name('majalah-store');
            Route::get('/humas/majalah/detail-majalah/{id}', 'detailJournal');
            Route::post('/humas/majalah/edit-majalah/{id}', 'updateJournal');
            Route::post('/humas/majalah/delete-majalah/{id}', 'deleteJournal');
        });
    });
});
