<?php

use App\Http\Controllers\AdministrasiController;
use App\Http\Controllers\AkademikController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DenahController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\GaleriController;
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
use App\Http\Controllers\PelayananKarirController;
use App\Http\Controllers\PrasaranaController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\SaranaController;
use App\Http\Controllers\SaranaPrasaranaController;
use App\Http\Controllers\SectionVideoController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SiswaController;
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

    Route::get('/berita', 'berita')->name('berita');
    Route::post('/berita/cari', 'beritaCari')->name('berita-cari');
    Route::get('/berita/{id}', 'detailBerita')->name('detail-berita-homepage');

    Route::get('/prestasi', 'prestasi')->name('prestasi');
    Route::post('/prestasi/cari', 'prestasiCari')->name('prestasi-cari');
    Route::get('/kategori-prestasi/{id}', 'kategoriPrestasi')->name('kategori-prestasi');
    Route::get('/prestasi/{id}', 'detailPrestasi')->name('detail-prestasi');
    Route::get('/berita', 'berita')->name('berita');
    Route::post('/berita/cari', 'beritaCari')->name('berita-cari');
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

Route::controller(LogoMarsController::class)->group(function () {
    Route::get('/send-logo', 'sendLogo');
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

        Route::controller(ForgotPasswordController::class)->group(function () {
            Route::get('forgot-password', 'showForgetPasswordForm')->name('forgot-password');
            Route::post('forgot-password', 'submitForgetPasswordForm')->name('forgot-password-action');
            Route::get('reset-password/{token}', 'showResetPasswordForm')->name('reset-password');
            Route::post('reset-password', 'submitResetPasswordForm')->name('reset-password-action');
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
            Route::get('/beranda/detail-header/{id}', 'detailHeader');
            Route::post('/beranda/store-header', 'storeHeader')->name('beranda.store');
            Route::post('/beranda/edit-header/{id}', 'updateHeader');
            Route::post('/beranda/delete-header/{id}', 'deleteHeader')->name('beranda.delete');
            Route::get('/beranda/edit-opening', 'editOpening');
            Route::post('/beranda/edit-opening', 'updateOpening');
            Route::get('/beranda/edit-remark', 'editRemark');
            Route::post('/beranda/edit-remark', 'updateRemark');
            Route::get('/beranda/edit-history', 'editHistory');
            Route::post('/beranda/edit-history', 'updateHistory');
            Route::get('/beranda/edit-navigasi', 'editNavigasi');
            Route::post('/beranda/edit-navigasi', 'updateNavigasi');
        });

        // PROFIL
        Route::controller(ProfilController::class)->group(function () {
            Route::get('/profil', 'index')->name('profil-index');
            Route::get('/profil/detail-header/{id}', 'detailHeader');
            Route::post('/profil/store-header', 'storeHeader')->name('profil.store');
            Route::post('/profil/edit-header/{id}', 'updateHeader');
            Route::post('/profil/delete-header/{id}', 'deleteHeader')->name('profil.delete');
            Route::post('/profil/add-course', 'storeCourse')->name('mata-pelajaran-store');
            Route::get('/profil/edit-course/{id}', 'editCourse');
            Route::post('/profil/edit-course/{id}', 'updateCourse');
            Route::post('/profil/delete-course/{id}', 'deleteCourse');
        });

        Route::controller(VisiMisiController::class)->group(function () {
            Route::get('/profil/visi-misi', 'index')->name('visi-misi-index');
            Route::get('/profil/visi-misi/detail-visi-misi', 'detailVisionMission')->name('visi-misi-detail');
            Route::get('/profil/visi-misi/edit-visi-misi', 'editVisionMission')->name('visi-misi-edit');
            Route::post('/profil/visi-misi/edit-visi-misi', 'updateVisionMission')->name('visi-misi-update');
            Route::get('/profil/visi-misi/edit-motto', 'editMotto');
            Route::post('/profil/visi-misi/edit-motto', 'updateMotto');
        });

        Route::controller(LogoMarsController::class)->group(function () {
            Route::get('/profil/logo-mars', 'index')->name('logo-mars-index');
            Route::get('/profil/logo-mars/detail-logo', 'detailLogo')->name('logo-detail');
            Route::get('/profil/logo-mars/edit-logo', 'editLogo')->name('logo-edit');
            Route::post('/profil/logo-mars/edit-logo', 'updateLogo')->name('logo-update');
            Route::get('/profil/logo-mars/detail-mars', 'detailMars')->name('mars-detail');
            Route::get('/profil/logo-mars/edit-mars', 'editMars')->name('mars-edit');
            Route::post('/profil/logo-mars/edit-mars', 'updateMars')->name('mars-update');

            Route::get('/profil/logo-mars/detail-hymne', 'detailHymne')->name('hymne-detail');
            Route::get('/profil/logo-mars/edit-hymne', 'editHymne')->name('hymne-edit');
            Route::post('/profil/logo-mars/edit-hymne', 'updateHymne')->name('hymne-update');
        });

        Route::controller(ManajemenController::class)->group(function () {
            Route::get('/profil/manajemen', 'index')->name('manajemen-index');
            Route::post('/profil/manajemen/cari', 'search')->name('manajemen-search');
            Route::get('/profil/manajemen/detail-section', 'detailSection')->name('section-manajemen-detail');
            Route::post('/profil/manajemen/edit-section', 'updateSection')->name('section-manajemen-update');

            Route::get('/profil/manajemen/download', 'generate')->name('manajemen-generate');
            Route::get('/profil/manajemen/detail/{id}', 'detail')->name('manajemen-detail');
            Route::get('/profil/manajemen/tambah', 'create')->name('manajemen-create');
            Route::post('/profil/manajemen/tambah', 'store')->name('manajemen-store');
            Route::get('/profil/manajemen/edit/{id}', 'edit')->name('manajemen-edit');
            Route::post('/profil/manajemen/edit/{id}', 'update')->name('manajemen-update');
            Route::post('/profil/manajemen/delete/{id}', 'delete')->name('manajemen-delete');

            Route::get('/profil/manajemen/tambah-hobi/{id}', 'createHobi');
        });

        Route::controller(GuruController::class)->group(function () {
            Route::get('/profil/guru', 'index')->name('guru-index');
            Route::post('/profil/guru/cari', 'search')->name('guru-search');
            Route::get('/profil/guru/detail-section', 'detailSection')->name('section-guru-detail');
            Route::post('/profil/guru/edit-section', 'updateSection')->name('section-guru-update');

            Route::get('/profil/guru/download', 'generate')->name('guru-generate');
            Route::get('/profil/guru/detail/{id}', 'detail')->name('guru-detail');
            Route::get('/profil/guru/tambah', 'create')->name('guru-create');
            Route::post('/profil/guru/tambah', 'store')->name('guru-store');
            Route::get('/profil/guru/edit/{id}', 'edit')->name('guru-edit');
            Route::post('/profil/guru/edit/{id}', 'update')->name('guru-update');
            Route::post('/profil/guru/delete/{id}', 'delete')->name('guru-delete');
        });

        Route::controller(PegawaiController::class)->group(function () {
            Route::get('/profil/pegawai', 'index')->name('pegawai-index');
            Route::post('/profil/pegawai/cari', 'search')->name('pegawai-search');
            Route::get('/profil/pegawai/detail-section', 'detailSection')->name('section-pegawai-detail');
            Route::post('/profil/pegawai/edit-section', 'updateSection')->name('section-pegawai-update');

            Route::get('/profil/pegawai/download', 'generate')->name('pegawai-generate');
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

        Route::controller(SectionVideoController::class)->group(function () {
            Route::get('/profil/video', 'index')->name('video-index');
            Route::get('/profil/video/detail-section', 'detailSection');
            Route::post('/profil/video/edit-section', 'updateSection');

            Route::get('/profil/detail-video/{id}', 'detailVideo');
            Route::post('/profil/store-video', 'storeVideo')->name('video.store');
            Route::post('/profil/edit-video/{id}', 'updateVideo');
            Route::post('/profil/delete-video/{id}', 'deleteVideo')->name('video.delete');
        });

        // AKADEMIK
        Route::controller(AkademikController::class)->group(function () {
            Route::get('/akademik', 'index')->name('akademik-index');
            Route::get('/akademik/detail-header/{id}', 'detailHeader');
            Route::post('/akademik/store-header', 'storeHeader')->name('akademik.store');
            Route::post('/akademik/edit-header/{id}', 'updateHeader');
            Route::post('/akademik/delete-header/{id}', 'deleteHeader')->name('akademik.delete');
        });

        Route::controller(KurikulumController::class)->group(function () {
            Route::get('/akademik/kurikulum', 'index')->name('kurikulum-index');
            Route::get('/akademik/kurikulum/detail-kurikulum', 'detailSection')->name('section-detail');
            Route::get('/akademik/kurikulum/edit-kurikulum', 'editSection')->name('section-edit');
            Route::post('/akademik/kurikulum/edit-section', 'updateSection')->name('section-update');
        });

        Route::controller(ProgramController::class)->group(function () {
            Route::get('/akademik/program', 'index')->name('program-index');
            Route::get('/akademik/program/detail-section', 'detailSection');
            Route::post('/akademik/program/edit-section', 'updateSection');
            Route::post('/akademik/program/tambah-program', 'storeProgram')->name('program-store');
            Route::get('/akademik/program/detail-program/{id}', 'detailProgram')->name('program-detail');
            Route::get('/akademik/program/edit-program/{id}', 'editProgram')->name('program-edit');
            Route::post('/akademik/program/edit-program/{id}', 'updateProgram')->name('program-update');
            Route::post('/akademik/program/delete-program/{id}', 'deleteProgram')->name('program-delete');
        });

        Route::controller(ProyekController::class)->group(function () {
            Route::get('/akademik/proyek', 'index')->name('proyek-index');
            Route::post('/akademik/proyek/cari', 'search')->name('proyek-search');
            Route::get('/akademik/proyek/download', 'generate')->name('proyek-generate');
            Route::get('/akademik/proyek/detail-section', 'detailSection');
            Route::post('/akademik/proyek/edit-section', 'updateSection');
            Route::get('/akademik/proyek/tambah-proyek', 'createProject')->name('proyek-tambah');
            Route::post('/akademik/proyek/tambah-proyek', 'storeProject')->name('proyek-store');
            Route::get('/akademik/proyek/detail-proyek/{id}', 'detailProject')->name('proyek-detail');
            Route::get('/akademik/proyek/edit-proyek/{id}', 'editProject')->name('proyek-edit');
            Route::post('/akademik/proyek/edit-proyek/{id}', 'updateProject')->name('proyek-update');
            Route::post('/akademik/proyek/delete-proyek/{id}', 'deleteProject')->name('proyek-delete');
        });

        Route::controller(GaleriController::class)->group(function () {
            Route::get('/akademik/galeri', 'index')->name('galeri-index');
            Route::get('/akademik/galeri/detail-section', 'detailSection');
            Route::post('/akademik/galeri/edit-section', 'updateSection');

            Route::post('/akademik/galeri/tambah-galeri', 'storeGallery')->name('galeri-store');
            Route::get('/akademik/galeri/detail-galeri/{id}', 'detailGallery')->name('galeri-detail');
            Route::post('/akademik/galeri/edit-galeri/{id}', 'updateGallery')->name('galeri-update');
            Route::post('/akademik/galeri/delete-galeri/{id}', 'deleteGallery')->name('galeri-delete');
        });

        Route::controller(KelulusanController::class)->group(function () {
            Route::get('/akademik/kelulusan', 'index')->name('kelulusan-index');
            Route::get('/akademik/kelulusan/detail-section', 'detailSectionGraduation');
            Route::post('/akademik/kelulusan/edit-section', 'updateSectionGraduation');

            Route::get('/akademik/kelulusan/download', 'generate')->name('kenaikanSiswa-generate');
            Route::post('/akademik/kelulusan/cari-kenaikan-siswa', 'searchSiswa')->name('kenaikanSiswa-search');
            Route::get('/akademik/kelulusan/detail-kenaikan-siswa/{id}', 'detailKenaikanSiswa');
            Route::post('/akademik/kelulusan/tambah-kenaikan-siswa', 'storeKenaikanSiswa')->name('kenaikan-siswa-store');
            Route::post('/akademik/kelulusan/edit-kenaikan-siswa/{id}', 'updateKenaikanSiswa');
            Route::post('/akademik/kelulusan/delete-kenaikan-siswa/{id}', 'deleteKenaikanSiswa');

            Route::post('/akademik/kelulusan/cari-kenaikan-kelas', 'searchKelas')->name('kenaikanKelas-search');
            Route::get('/akademik/kelulusan/detail-kenaikan-kelas/{id}', 'detailKenaikanKelas');
            Route::post('/akademik/kelulusan/tambah-kenaikan-kelas', 'storeKenaikanKelas')->name('kenaikan-kelas-store');
            Route::post('/akademik/kelulusan/edit-kenaikan-kelas/{id}', 'updateKenaikanKelas');
            Route::post('/akademik/kelulusan/delete-kenaikan-kelas/{id}', 'deleteKenaikanKelas');
        });

        // KESISWAAN
        Route::controller(KesiswaanController::class)->group(function () {
            Route::get('/kesiswaan', 'index')->name('kesiswaan-index');
            Route::get('/kesiswaan/detail-header/{id}', 'detailHeader');
            Route::post('/kesiswaan/store-header', 'storeHeader')->name('kesiswaan.store');
            Route::post('/kesiswaan/edit-header/{id}', 'updateHeader');
            Route::post('/kesiswaan/delete-header/{id}', 'deleteHeader')->name('kesiswaan.delete');
        });

        Route::controller(AdministrasiController::class)->group(function () {
            Route::get('/kesiswaan/administrasi', 'index')->name('administrasi-index');

            Route::post('/kesiswaan/administrasi/tambah-tahun-ajaran', 'storeTahunAjaran')->name('tahun-ajaran-store');
            Route::get('/kesiswaan/administrasi/detail-tahun-ajaran/{id}', 'detailTahunAjaran');
            Route::post('/kesiswaan/administrasi/edit-tahun-ajaran/{id}', 'updateTahunAjaran');
            Route::post('/kesiswaan/administrasi/delete-tahun-ajaran/{id}', 'deleteTahunAjaran');

            Route::get('/kesiswaan/administrasi/detail-semester/{id}', 'detailSemester');
            Route::post('/kesiswaan/administrasi/edit-semester/{id}', 'updateSemester');

            Route::post('/kesiswaan/administrasi/tambah-kelas', 'storeKelas')->name('kelas-store');
            Route::get('/kesiswaan/administrasi/detail-kelas/{id}', 'detailKelas');
            Route::post('/kesiswaan/administrasi/edit-kelas/{id}', 'updateKelas');
            Route::post('/kesiswaan/administrasi/delete-kelas/{id}', 'deleteKelas');

            Route::post('/kesiswaan/administrasi/tambah-jurusan', 'storeJurusan')->name('jurusan-store');
            Route::get('/kesiswaan/administrasi/detail-jurusan/{id}', 'detailJurusan');
            Route::post('/kesiswaan/administrasi/edit-jurusan/{id}', 'updateJurusan');
            Route::post('/kesiswaan/administrasi/delete-jurusan/{id}', 'deleteJurusan');

            Route::post('/kesiswaan/administrasi/tambah-index', 'storeIndex')->name('index-store');
            Route::get('/kesiswaan/administrasi/detail-index/{id}', 'detailIndex');
            Route::post('/kesiswaan/administrasi/edit-index/{id}', 'updateIndex');
            Route::post('/kesiswaan/administrasi/delete-index/{id}', 'deleteIndex');
        });

        Route::controller(SiswaController::class)->group(function () {
            Route::get('/kesiswaan/siswa', 'index')->name('siswa-index');
            Route::get('/kesiswaan/siswa/detail-section', 'detailSectionStudent');
            Route::post('/kesiswaan/siswa/edit-section', 'updateSectionStudent');

            Route::post('/kesiswaan/siswa/data-siswa/{id}/cari-siswa', 'search')->name('siswa-search');
            Route::get('/kesiswaan/siswa/data-siswa-x/download', 'generateX')->name('siswa-generate-x');
            Route::get('/kesiswaan/siswa/data-siswa-xi/download', 'generateXI')->name('siswa-generate-xi');
            Route::get('/kesiswaan/siswa/data-siswa-xii/download', 'generateXII')->name('siswa-generate-xii');

            Route::get('/kesiswaan/siswa/data-siswa/{id}', 'studentIndex')->name('data-siswa-index');
            Route::get('/kesiswaan/siswa/data-siswa/tambah/{id}', 'studentCreate')->name('data-siswa-create');
            Route::post('/kesiswaan/siswa/data-siswa/tambah/{id}', 'studentStore')->name('data-siswa-store');
            Route::get('/kesiswaan/siswa/data-siswa/detail/{id}', 'studentDetail')->name('data-siswa-detail');
            Route::get('/kesiswaan/siswa/data-siswa/edit/{id}', 'studentEdit')->name('data-siswa-edit');
            Route::post('/kesiswaan/siswa/data-siswa/edit/{id}', 'studentUpdate')->name('data-siswa-update');
            Route::post('/kesiswaan/siswa/data-siswa/delete/{id}', 'studentDelete')->name('data-siswa-delete');
        });

        Route::controller(EkstrakurikulerController::class)->group(function () {
            Route::get('/kesiswaan/ekstrakurikuler', 'index')->name('ekstrakurikuler-index');
            Route::post('/kesiswaan/ekstrakurikuler/cari', 'search')->name('ekstrakurikuler-search');
            Route::get('/kesiswaan/ekstrakurikuler/download', 'generate')->name('ekstrakurikuler-generate');
            Route::get('/kesiswaan/ekstrakurikuler/detail-section', 'detailSection');
            Route::post('/kesiswaan/ekstrakurikuler/edit-section', 'updateSection');

            Route::get('/kesiswaan/ekstrakurikuler/detail-ekstrakurikuler/{id}', 'detailExtracurriculer')->name('ekstrakurikuler-detail');
            Route::get('/kesiswaan/ekstrakurikuler/tambah-ekstrakurikuler', 'createExtracurriculer')->name('ekstrakurikuler-create');
            Route::post('/kesiswaan/ekstrakurikuler/tambah-ekstrakurikuler', 'storeExtracurriculer')->name('ekstrakurikuler-store');
            Route::get('/kesiswaan/ekstrakurikuler/edit-ekstrakurikuler/{id}', 'editExtracurriculer')->name('ekstrakurikuler-edit');
            Route::post('/kesiswaan/ekstrakurikuler/edit-ekstrakurikuler/{id}', 'updateExtracurriculer')->name('ekstrakurikuler-update');
            Route::post('/kesiswaan/ekstrakurikuler/delete-ekstrakurikuler/{id}', 'deleteExtracurriculer')->name('ekstrakurikuler-delete');
        });

        Route::controller(PelayananKarirController::class)->group(function () {
            Route::get('/kesiswaan/pelayanan-karir', 'index')->name('pelayanan-karir-index');
            Route::get('/kesiswaan/pelayanan-karir/detail-section', 'detailSection');
            Route::post('/kesiswaan/pelayanan-karir/edit-section', 'updateSection');

            Route::post('/kesiswaan/pelayanan-karir/cari-pelayanan', 'searchKarir')->name('pelayanan-karir-search');
            Route::get('/kesiswaan/pelayanan-karir/download-pelayanan', 'generatePelayanan')->name('pelayanan-karir-generate');
            Route::get('/kesiswaan/pelayanan-karir/detail-pelayanan-karir/{id}', 'detailService')->name('pelayanan-karir-detail');
            Route::get('/kesiswaan/pelayanan-karir/tambah-pelayanan-karir', 'createService')->name('pelayanan-karir-create');
            Route::post('/kesiswaan/pelayanan-karir/tambah-pelayanan-karir', 'storeService')->name('pelayanan-karir-store');
            Route::get('/kesiswaan/pelayanan-karir/edit-pelayanan-karir/{id}', 'editService')->name('pelayanan-karir-edit');
            Route::post('/kesiswaan/pelayanan-karir/edit-pelayanan-karir/{id}', 'updateService')->name('pelayanan-karir-update');
            Route::post('/kesiswaan/pelayanan-karir/delete-pelayanan-karir/{id}', 'deleteService');

            Route::post('/kesiswaan/pelayanan-karir/cari-pembinaan', 'searchSiswa')->name('pembinaan-siswa-search');
            Route::get('/kesiswaan/pelayanan-karir/download-pembinaan', 'generatePembinaan')->name('pembinaan-siswa-generate');
            Route::get('/kesiswaan/pelayanan-karir/detail-pembinaan-siswa/{id}', 'detailDevelopment')->name('pembinaan-siswa-detail');
            Route::get('/kesiswaan/pelayanan-karir/tambah-pembinaan-siswa', 'createDevelopment')->name('pembinaan-siswa-create');
            Route::post('/kesiswaan/pelayanan-karir/tambah-pembinaan-siswa', 'storeDevelopment')->name('pembinaan-siswa-store');
            Route::get('/kesiswaan/pelayanan-karir/edit-pembinaan-siswa/{id}', 'editDevelopment')->name('pembinaan-siswa-edit');
            Route::post('/kesiswaan/pelayanan-karir/edit-pembinaan-siswa/{id}', 'updateDevelopment')->name('pembinaan-siswa-update');
            Route::post('/kesiswaan/pelayanan-karir/delete-pembinaan-siswa/{id}', 'deleteDevelopment');
        });

        Route::controller(PrestasiController::class)->group(function () {
            Route::get('/kesiswaan/prestasi', 'index')->name('prestasi-index');
            Route::get('/kesiswaan/prestasi/detail-section', 'detailSection');
            Route::post('/kesiswaan/prestasi/edit-section', 'updateSection');

            Route::post('/kesiswaan/prestasi/cari', 'search')->name('prestasi-search');
            Route::get('/kesiswaan/prestasi/download', 'generate')->name('prestasi-generate');
            Route::get('/kesiswaan/prestasi/detail-prestasi/{id}', 'detailAchievement')->name('prestasi-detail');
            Route::get('/kesiswaan/prestasi/tambah-prestasi', 'createAchievement')->name('prestasi-create');
            Route::post('/kesiswaan/prestasi/tambah-prestasi', 'storeAchievement')->name('prestasi-store');
            Route::get('/kesiswaan/prestasi/edit-prestasi/{id}', 'editAchievement')->name('prestasi-edit');
            Route::post('/kesiswaan/prestasi/edit-prestasi/{id}', 'updateAchievement')->name('prestasi-update');
            Route::post('/kesiswaan/prestasi/delete-prestasi/{id}', 'deleteAchievement')->name('prestasi-delete');
        });

        Route::controller(BeasiswaController::class)->group(function () {
            Route::get('/kesiswaan/beasiswa', 'index')->name('beasiswa-index');
            Route::get('/kesiswaan/beasiswa/detail-section', 'detailSection');
            Route::post('/kesiswaan/beasiswa/edit-section', 'updateSection');

            Route::get('/kesiswaan/beasiswa/detail-beasiswa/{id}', 'detailBeasiswa');
            Route::post('/kesiswaan/beasiswa/tambah-beasiswa', 'storeBeasiswa')->name('beasiswa-store');
            Route::post('/kesiswaan/beasiswa/edit-beasiswa/{id}', 'updateBeasiswa');
            Route::post('/kesiswaan/beasiswa/delete-beasiswa/{id}', 'deleteBeasiswa');

            Route::post('/kesiswaan/beasiswa/cari', 'search')->name('penerima-beasiswa-search');
            Route::get('/kesiswaan/beasiswa/download', 'generate')->name('penerima-beasiswa-generate');
            Route::get('/kesiswaan/beasiswa/detail-penerima-beasiswa/{id}', 'detailPenerimaBeasiswa');
            Route::post('/kesiswaan/beasiswa/tambah-penerima-beasiswa', 'storePenerimaBeasiswa')->name('penerima-beasiswa-store');
            Route::post('/kesiswaan/beasiswa/edit-penerima-beasiswa/{id}', 'updatePenerimaBeasiswa');
            Route::post('/kesiswaan/beasiswa/delete-penerima-beasiswa/{id}', 'deletePenerimaBeasiswa');
        });

        Route::controller(AlumniController::class)->group(function () {
            Route::get('/kesiswaan/alumni', 'index')->name('alumni-index');
            Route::post('/kesiswaan/alumni/cari', 'search')->name('alumni-search');
            Route::get('/kesiswaan/alumni/download', 'generate')->name('alumni-generate');
            Route::get('/kesiswaan/alumni/detail-section', 'detailSection');
            Route::post('/kesiswaan/alumni/edit-section', 'updateSection');

            Route::get('/kesiswaan/alumni/tambah-alumni', 'createAlumni')->name('alumni-create');
            Route::post('/kesiswaan/alumni/tambah-alumni', 'storeAlumni')->name('alumni-store');
            Route::get('/kesiswaan/alumni/detail-alumni/{id}', 'detailAlumni')->name('alumni-detail');
            Route::get('/kesiswaan/alumni/edit-alumni/{id}', 'editAlumni')->name('alumni-edit');
            Route::post('/kesiswaan/alumni/edit-alumni/{id}', 'updateAlumni')->name('alumni-update');
            Route::post('/kesiswaan/alumni/delete-alumni/{id}', 'deleteAlumni');
        });

        // SARANA & PRASARANA
        Route::controller(SaranaController::class)->group(function () {
            Route::get('/sarana-prasarana', 'index')->name('sarana-index');
            Route::get('/sarana-prasarana/detail-header/{id}', 'detailHeader');
            Route::post('/sarana-prasarana/store-header', 'storeHeader')->name('sarana.store');
            Route::post('/sarana-prasarana/edit-header/{id}', 'updateHeader');
            Route::post('/sarana-prasarana/delete-header/{id}', 'deleteHeader')->name('sarana.delete');
        });

        Route::controller(PrasaranaController::class)->group(function () {
            Route::get('/sarana-prasarana/prasarana', 'index')->name('prasarana-index');
            Route::get('/sarana-prasarana/prasarana/download', 'generate')->name('prasarana-generate');
            Route::get('/sarana-prasarana/prasarana/detail-section', 'detailSection');
            Route::post('/sarana-prasarana/prasarana/edit-section', 'updateSection');

            Route::get('/sarana-prasarana/prasarana/tambah-prasarana', 'createPrasarana')->name('prasarana-create');
            Route::post('/sarana-prasarana/prasarana/tambah-prasarana', 'storePrasarana')->name('prasarana-store');
            Route::get('/sarana-prasarana/prasarana/detail-prasarana/{id}', 'detailPrasarana')->name('prasarana-detail');
            Route::get('/sarana-prasarana/prasarana/edit-prasarana/{id}', 'editPrasarana')->name('prasarana-edit');
            Route::post('/sarana-prasarana/prasarana/edit-prasarana/{id}', 'updatePrasarana')->name('prasarana-update');
            Route::post('/sarana-prasarana/prasarana/delete-prasarana/{id}', 'deletePrasarana');
        });

        Route::controller(DenahController::class)->group(function () {
            Route::get('/sarana-prasarana/denah', 'index')->name('denah-index');
            Route::post('/sarana-prasarana/denah/cari', 'search')->name('denah-search');
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
            Route::get('/humas/detail-header/{id}', 'detailHeader');
            Route::post('/humas/store-header', 'storeHeader')->name('humas.store');
            Route::post('/humas/edit-header/{id}', 'updateHeader');
            Route::post('/humas/delete-header/{id}', 'deleteHeader')->name('humas.delete');
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
            Route::post('/humas/majalah/cari', 'search')->name('majalah-search');
            Route::get('/humas/majalah/download', 'generate')->name('majalah-generate');
            Route::get('/humas/majalah/detail-header', 'detailHeader');
            Route::post('/humas/majalah/edit-header', 'updateHeader');

            Route::get('/humas/majalah/tambah-majalah', 'createJournal')->name('majalah-create');
            Route::post('/humas/majalah/tambah-majalah', 'storeJournal')->name('majalah-store');
            Route::get('/humas/majalah/detail-majalah/{id}', 'detailJournal')->name('majalah-detail');
            Route::get('/humas/majalah/edit-majalah/{id}', 'editJournal')->name('majalah-edit');
            Route::post('/humas/majalah/edit-majalah/{id}', 'updateJournal')->name('majalah-update');
            Route::post('/humas/majalah/delete-majalah/{id}', 'deleteJournal');
        });

        Route::controller(BeritaController::class)->group(function () {
            Route::get('/humas/berita', 'index')->name('berita-index');
            Route::post('/humas/berita/cari', 'search')->name('berita-search');
            Route::get('/humas/berita/download', 'generate')->name('berita-generate');
            Route::get('/humas/berita/detail-header', 'detailHeader');
            Route::post('/humas/berita/edit-header', 'updateHeader');

            Route::get('/humas/berita/tambah-berita', 'createBerita')->name('berita-create');
            Route::post('/humas/berita/tambah-berita', 'storeBerita')->name('berita-store');
            Route::get('/humas/berita/detail-berita/{id}', 'detailBerita')->name('berita-detail');
            Route::get('/humas/berita/edit-berita/{id}', 'editBerita')->name('berita-edit');
            Route::post('/humas/berita/edit-berita/{id}', 'updateBerita')->name('berita-update');
            Route::post('/humas/berita/delete-berita/{id}', 'deleteBerita');
        });

        // PENGATURAN
        Route::controller(SettingController::class)->group(function () {
            Route::get('/pengaturan', 'index')->name('pengaturan-index');
            Route::get('/pengaturan/edit-pengaturan', 'editSetting')->name('pengaturan-edit');
            Route::post('/pengaturan/edit-pengaturan', 'updateSetting')->name('pengaturan-update');
        });
    });
});
