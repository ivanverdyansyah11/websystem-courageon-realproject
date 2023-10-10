<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Beasiswa;
use App\Models\Berita;
use App\Models\Contact;
use App\Models\Curriculum;
use App\Models\Denah;
use App\Models\Employee;
use App\Models\Extracurricular;
use App\Models\Gallery;
use App\Models\HeaderAcademic;
use App\Models\HeaderHome;
use App\Models\HeaderHumas;
use App\Models\HeaderProfile;
use App\Models\HeaderSaranaPrasarana;
use App\Models\HeaderStudent;
use App\Models\HistoryHome;
use App\Models\Hymne;
use App\Models\Journal;
use App\Models\KategoriPrestasi;
use App\Models\Kelas;
use App\Models\KenaikanKelas;
use App\Models\Logo;
use App\Models\Mars;
use App\Models\Motto;
use App\Models\Navigasi;
use App\Models\OpeningHome;
use App\Models\Partnership;
use App\Models\PelayananKarir;
use App\Models\Prasarana;
use App\Models\Prestasi;
use App\Models\Program;
use App\Models\Project;
use App\Models\RemarkHome;
use App\Models\SectionAchievement;
use App\Models\SectionAlumni;
use App\Models\SectionBeasiswa;
use App\Models\SectionBerita;
use App\Models\SectionContact;
use App\Models\SectionDenah;
use App\Models\SectionExtracurricular;
use App\Models\SectionGallery;
use App\Models\SectionGraduation;
use App\Models\SectionJournal;
use App\Models\SectionKemitraan;
use App\Models\SectionManagement;
use App\Models\SectionPrasarana;
use App\Models\SectionProgram;
use App\Models\SectionProyek;
use App\Models\SectionService;
use App\Models\SectionStaff;
use App\Models\SectionStudent;
use App\Models\SectionTeacher;
use App\Models\Student;
use App\Models\TahunAjaran;
use App\Models\VisionMission;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    function beranda()
    {
        return view('homepage.beranda.index', [
            'title' => 'Beranda',
            'logo' => Logo::first(),
            'navigations' => Navigasi::first(),
            'headerHomes' => HeaderHome::all(),
            'openingHome' => OpeningHome::first(),
            'remarkHome' => RemarkHome::first(),
            'sectionAchievement' => SectionAchievement::first(),
            'achievementCount' => Prestasi::count(),
            'achievements' => Prestasi::take(4)->get(),
            'achievements_lg' => Prestasi::take(3)->get(),
            'kategori_prestasi' => KategoriPrestasi::all(),
            'sectionAlumni' => SectionAlumni::first(),
            'alumnis' => Alumni::with('student')->get(),
            'historyHome' => HistoryHome::first(),
            'sectionJournal' => SectionJournal::first(),
            'journals' => Journal::take(4)->get(),
            'journalCount' => Journal::count(),
            'beritas' => Berita::take(4)->get(),
            'beritaCount' => Berita::count(),
        ]);
    }

    function profil()
    {
        return view('homepage.profil.index', [
            'title' => 'Profil',
            'logo' => Logo::first(),
            'navigations' => Navigasi::first(),
            'headerProfiles' => HeaderProfile::all(),
            'visiMision' => VisionMission::first(),
            'motto' => Motto::first(),
            'logo' => Logo::first(),
            'mars' => Mars::first(),
            'hymne' => Hymne::first(),
            'sectionManagement' => SectionManagement::first(),
            'managements' => Employee::where('role_employees_id', '1')->take(4)->get(),
            'managementCount' => Employee::where('role_employees_id', '1')->get()->count(),
            'sectionTeacher' => SectionTeacher::first(),
            'teachers' => Employee::where('role_employees_id', '2')->take(4)->get(),
            'teacherCount' => Employee::where('role_employees_id', '2')->get()->count(),
            'sectionStaff' => SectionStaff::first(),
            'staffs' => Employee::where('role_employees_id', '3')->take(4)->get(),
            'staffCount' => Employee::where('role_employees_id', '3')->get()->count(),
            'sectionContact' => SectionContact::first(),
            'contacts' => Contact::all(),
        ]);
    }

    function akademik()
    {
        $tahun_ajaran = TahunAjaran::orderBy('id', 'DESC')->take(3)->get('tahun')->toArray();
        $kenaikanKelasTahunIniLaki = KenaikanKelas::where('tahun_ajaran', $tahun_ajaran[0])->where('gender', 'L')->first();
        $kenaikanKelasTahunIniPerempuan = KenaikanKelas::where('tahun_ajaran', $tahun_ajaran[0])->where('gender', 'P')->first();
        $kenaikanKelasTahunLaluLaki = KenaikanKelas::where('tahun_ajaran', $tahun_ajaran[1])->where('gender', 'L')->first();
        $kenaikanKelasTahunLaluPerempuan = KenaikanKelas::where('tahun_ajaran', $tahun_ajaran[1])->where('gender', 'P')->first();
        $kenaikanKelasTahun2LaluLaki = KenaikanKelas::where('tahun_ajaran', $tahun_ajaran[2])->where('gender', 'L')->first();
        $kenaikanKelasTahun2LaluPerempuan = KenaikanKelas::where('tahun_ajaran', $tahun_ajaran[2])->where('gender', 'P')->first();

        return view('homepage.akademik.index', [
            'title' => 'Akademik',
            'logo' => Logo::first(),
            'navigations' => Navigasi::first(),
            'headerAcademics' => HeaderAcademic::all(),
            'curriculum' => Curriculum::first(),
            'sectionProgram' => SectionProgram::first(),
            'programs' => Program::all(),
            'sectionProyek' => SectionProyek::first(),
            'projects' => Project::take(4)->get(),
            'projectCount' => Project::count(),
            'sectionGallery' => SectionGallery::first(),
            'galleries' => Gallery::all(),
            'sectionGraduation' => SectionGraduation::first(),
            'kenaikanKelas' => KenaikanKelas::orderBy('id', 'DESC')->take(3)->get(),
            'tahunAjaran' => TahunAjaran::orderBy('id', 'DESC')->take(3)->get(),
            'kenaikanKelasTahunIniLaki' => $kenaikanKelasTahunIniLaki,
            'kenaikanKelasTahunIniPerempuan' => $kenaikanKelasTahunIniPerempuan,
            'kenaikanKelasTahunLaluLaki' => $kenaikanKelasTahunLaluLaki,
            'kenaikanKelasTahunLaluPerempuan' => $kenaikanKelasTahunLaluPerempuan,
            'kenaikanKelasTahun2LaluLaki' => $kenaikanKelasTahun2LaluLaki,
            'kenaikanKelasTahun2LaluPerempuan' => $kenaikanKelasTahun2LaluPerempuan,
        ]);
    }

    function kesiswaan()
    {
        $tahun_ajaran = TahunAjaran::orderBy('id', 'DESC')->take(3)->get('id')->toArray();

        $dataSiswaTahunIni = [];
        $dataSiswaTahunIniLaki = [];
        $dataSiswaTahunIniPerempuan = [];
        $kelasArray = ['1', '2', '3'];
        foreach ($kelasArray as $i => $kelas) {
            $siswa = Student::where('tahun_ajarans_id', $tahun_ajaran[0])->where('kelases_id', $kelas)->get()->count();
            $siswaLaki = Student::where('tahun_ajarans_id', $tahun_ajaran[0])->where('kelases_id', $kelas)->where('jenis_kelamin', 'L')->get()->count();
            $siswaPerempuan = Student::where('tahun_ajarans_id', $tahun_ajaran[0])->where('kelases_id', $kelas)->where('jenis_kelamin', 'P')->get()->count();

            $dataSiswaTahunIni[$kelas] = $siswa;
            $dataSiswaTahunIniLaki[$kelas] = $siswaLaki;
            $dataSiswaTahunIniPerempuan[$kelas] = $siswaPerempuan;
        }

        $dataSiswaTahunKedua = [];
        $dataSiswaTahunKeduaLaki = [];
        $dataSiswaTahunKeduaPerempuan = [];
        $kelasArray = ['1', '2', '3'];
        foreach ($kelasArray as $i => $kelas) {
            $siswa = Student::where('tahun_ajarans_id', $tahun_ajaran[1])->where('kelases_id', $kelas)->get()->count();
            $siswaLaki = Student::where('tahun_ajarans_id', $tahun_ajaran[1])->where('kelases_id', $kelas)->where('jenis_kelamin', 'L')->get()->count();
            $siswaPerempuan = Student::where('tahun_ajarans_id', $tahun_ajaran[1])->where('kelases_id', $kelas)->where('jenis_kelamin', 'P')->get()->count();

            $dataSiswaTahunKedua[$kelas] = $siswa;
            $dataSiswaTahunKeduaLaki[$kelas] = $siswaLaki;
            $dataSiswaTahunKeduaPerempuan[$kelas] = $siswaPerempuan;
        }

        $dataSiswaTahunKetiga = [];
        $dataSiswaTahunKetigaLaki = [];
        $dataSiswaTahunKetigaPerempuan = [];
        $kelasArray = ['1', '2', '3'];
        foreach ($kelasArray as $i => $kelas) {
            $siswa = Student::where('tahun_ajarans_id', $tahun_ajaran[2])->where('kelases_id', $kelas)->get()->count();
            $siswaLaki = Student::where('tahun_ajarans_id', $tahun_ajaran[2])->where('kelases_id', $kelas)->where('jenis_kelamin', 'L')->get()->count();
            $siswaPerempuan = Student::where('tahun_ajarans_id', $tahun_ajaran[2])->where('kelases_id', $kelas)->where('jenis_kelamin', 'P')->get()->count();

            $dataSiswaTahunKetiga[$kelas] = $siswa;
            $dataSiswaTahunKetigaLaki[$kelas] = $siswaLaki;
            $dataSiswaTahunKetigaPerempuan[$kelas] = $siswaPerempuan;
        }

        return view('homepage.kesiswaan.index', [
            'title' => 'Kesiswaan',
            'logo' => Logo::first(),
            'navigations' => Navigasi::first(),
            'headerStudents' => HeaderStudent::all(),
            'sectionStudent' => SectionStudent::first(),
            'tahunAjaran' => TahunAjaran::orderBy('id', 'DESC')->take(3)->get(),

            'dataSiswaTahunIni' => $dataSiswaTahunIni,
            'dataSiswaTahunKedua' => $dataSiswaTahunKedua,
            'dataSiswaTahunKetiga' => $dataSiswaTahunKetiga,

            'dataSiswaTahunIniLaki' => $dataSiswaTahunIniLaki,
            'dataSiswaTahunKeduaLaki' => $dataSiswaTahunKeduaLaki,
            'dataSiswaTahunKetigaLaki' => $dataSiswaTahunKetigaLaki,

            'dataSiswaTahunIniPerempuan' => $dataSiswaTahunIniPerempuan,
            'dataSiswaTahunKeduaPerempuan' => $dataSiswaTahunKeduaPerempuan,
            'dataSiswaTahunKetigaPerempuan' => $dataSiswaTahunKetigaPerempuan,

            'sectionExtracurricular' => SectionExtracurricular::first(),
            'extracurriculars' => Extracurricular::all(),
            'sectionService' => SectionService::first(),
            'pelayananKarir' => PelayananKarir::take(4)->get(),
            'pelayananKarirCount' => PelayananKarir::count(),
            'sectionAchievement' => SectionAchievement::first(),
            'achievements' => Prestasi::take(4)->get(),
            'achievementCount' => Prestasi::count(),
            'kategori_prestasi' => KategoriPrestasi::all(),
            'sectionBeasiswa' => SectionBeasiswa::first(),
            'beasiswas' => Beasiswa::all(),
            'sectionAlumni' => SectionAlumni::first(),
            'alumnis' => Alumni::all(),
        ]);
    }

    function saranaPrasarana()
    {
        return view('homepage.sarana-prasarana.index', [
            'title' => 'Sarana Prasarana',
            'logo' => Logo::first(),
            'navigations' => Navigasi::first(),
            'headerSaranaPrasaranas' => HeaderSaranaPrasarana::all(),
            'sectionPrasarana' => SectionPrasarana::first(),
            'prasaranas' => Prasarana::take(4)->get(),
            'prasaranaCount' => Prasarana::count(),
            'sectionDenah' => SectionDenah::first(),
            'denahs' => Denah::all(),
        ]);
    }

    function humas()
    {
        return view('homepage.humas.index', [
            'title' => 'Humas',
            'logo' => Logo::first(),
            'navigations' => Navigasi::first(),
            'headerHumases' => HeaderHumas::all(),
            'SectionKemitraan' => SectionKemitraan::first(),
            'partnerships' => Partnership::all(),
            'sectionJournal' => SectionJournal::first(),
            'journals' => Journal::take(4)->get(),
            'journalCount' => Journal::count(),
            'beritas' => Berita::take(4)->get(),
            'beritaCount' => Berita::count(),
        ]);
    }

    function berita()
    {
        return view('homepage.berita.index', [
            'title' => 'Berita',
            'logo' => Logo::first(),
            'navigations' => Navigasi::first(),
            'sectionBerita' => SectionBerita::first(),
            'beritas' => Berita::all(),
        ]);
    }

    function beritaCari(Request $request)
    {
        $results = Berita::where('title', 'like', '%' . $request->search . '%')
            ->orWhere('author', 'like', '%' . $request->search . '%')
            ->orWhere('created_date', 'like', '%' . $request->search . '%')
            ->orWhere('description', 'like', '%' . $request->search . '%')
            ->get();

        return view('homepage.berita.index', [
            'title' => 'Berita',
            'logo' => Logo::first(),
            'navigations' => Navigasi::first(),
            'sectionBerita' => SectionBerita::first(),
            'beritas' => $results,
        ]);
    }

    function detailBerita($id)
    {
        return view('homepage.berita.detail', [
            'title' => 'Berita',
            'logo' => Logo::first(),
            'navigations' => Navigasi::first(),
            'berita' => Berita::where('id', $id)->first(),
            'rekomendasi' => Berita::whereNotIn('id', [$id])->take(5)->get(),
        ]);
    }

    function prestasi()
    {
        return view('homepage.prestasi.index', [
            'title' => 'Prestasi',
            'logo' => Logo::first(),
            'navigations' => Navigasi::first(),
            'sectionAchievement' => SectionAchievement::first(),
            'achievements' => Prestasi::all(),
            'kategori_prestasi' => KategoriPrestasi::all(),
        ]);
    }

    function prestasiCari(Request $request)
    {
        $results = Prestasi::where('nama_kegiatan', 'like', '%' . $request->search . '%')
            ->orWhere('status', 'like', '%' . $request->search . '%')
            ->orWhere('hasil', 'like', '%' . $request->search . '%')
            ->orWhere('tanggal', 'like', '%' . $request->search . '%')
            ->orWhere('nama_peserta', 'like', '%' . $request->search . '%')
            ->orWhere('pembina', 'like', '%' . $request->search . '%')
            ->orWhere('penyelenggara', 'like', '%' . $request->search . '%')
            ->orWhere('tingkat', 'like', '%' . $request->search . '%')
            ->get();

        return view('homepage.prestasi.index', [
            'title' => 'Prestasi',
            'logo' => Logo::first(),
            'navigations' => Navigasi::first(),
            'sectionAchievement' => SectionAchievement::first(),
            'achievements' => $results,
            'kategori_prestasi' => KategoriPrestasi::all(),
        ]);
    }

    function kategoriPrestasi($id)
    {
        return view('homepage.prestasi.index', [
            'title' => 'Prestasi',
            'logo' => Logo::first(),
            'navigations' => Navigasi::first(),
            'sectionAchievement' => SectionAchievement::first(),
            'achievements' => Prestasi::where('kategori_prestasis_id', $id)->get(),
            'kategori_prestasi' => KategoriPrestasi::all(),
        ]);
    }

    function detailPrestasi($id)
    {
        return view('homepage.prestasi.detail', [
            'title' => 'Detail Prestasi',
            'logo' => Logo::first(),
            'navigations' => Navigasi::first(),
            'achievement' => Prestasi::where('id', $id)->first(),
            'kategori_prestasi' => KategoriPrestasi::all(),
            'rekomendasi' => Prestasi::whereNotIn('id', [$id])->take(5)->get(),
        ]);
    }

    function majalah()
    {
        return view('homepage.majalah.index', [
            'title' => 'Majalah',
            'logo' => Logo::first(),
            'navigations' => Navigasi::first(),
            'sectionJournal' => SectionJournal::first(),
            'journals' => Journal::all(),
        ]);
    }

    function majalahCari(Request $request)
    {
        $results = Journal::where('title', 'like', '%' . $request->search . '%')
            ->orWhere('author', 'like', '%' . $request->search . '%')
            ->orWhere('created_date', 'like', '%' . $request->search . '%')
            ->get();

        return view('homepage.majalah.index', [
            'title' => 'Majalah',
            'logo' => Logo::first(),
            'navigations' => Navigasi::first(),
            'sectionJournal' => SectionJournal::first(),
            'journals' => $results,
        ]);
    }

    function manajemen()
    {
        return view('homepage.manajemen.index', [
            'title' => 'Manajemen',
            'logo' => Logo::first(),
            'navigations' => Navigasi::first(),
            'sectionManagement' => SectionManagement::first(),
            'managements' => Employee::where('role_employees_id', '1')->get(),
        ]);
    }

    function guru()
    {
        return view('homepage.guru.index', [
            'title' => 'Guru',
            'logo' => Logo::first(),
            'navigations' => Navigasi::first(),
            'sectionTeacher' => SectionTeacher::first(),
            'teachers' => Employee::where('role_employees_id', '2')->get(),
        ]);
    }

    function pegawai()
    {
        return view('homepage.pegawai.index', [
            'title' => 'Pegawai',
            'logo' => Logo::first(),
            'navigations' => Navigasi::first(),
            'sectionStaff' => SectionStaff::first(),
            'staffs' => Employee::where('role_employees_id', '3')->get(),
        ]);
    }

    function projek()
    {
        return view('homepage.projek.index', [
            'title' => 'Projek 5P',
            'logo' => Logo::first(),
            'navigations' => Navigasi::first(),
            'sectionProyek' => SectionProyek::first(),
            'projects' => Project::all(),
        ]);
    }

    function detailProjek($id)
    {
        return view('homepage.projek.detail', [
            'title' => 'Detail Projek 5P',
            'logo' => Logo::first(),
            'navigations' => Navigasi::first(),
            'project' => Project::where('id', $id)->first(),
            'rekomendasi' => Project::whereNotIn('id', [$id])->take(5)->get(),
        ]);
    }

    function detailEkstrakurikuler($id)
    {
        return view('homepage.ekstrakurikuler.detail', [
            'title' => 'Detail Ekstrakurikuler',
            'logo' => Logo::first(),
            'navigations' => Navigasi::first(),
            'extracurriculars' => Extracurricular::where('id', $id)->first(),
            'rekomendasi' => Extracurricular::whereNotIn('id', [$id])->take(5)->get(),
        ]);
    }

    function pelayanan()
    {
        return view('homepage.pelayanan.index', [
            'title' => 'Pelayanan Karir',
            'logo' => Logo::first(),
            'navigations' => Navigasi::first(),
            'sectionService' => SectionService::first(),
            'pelayananKarir' => PelayananKarir::all(),
        ]);
    }

    function detailPelayanan($id)
    {
        return view('homepage.pelayanan.detail', [
            'title' => 'Detail Pelayanan Karir',
            'logo' => Logo::first(),
            'navigations' => Navigasi::first(),
            'students' => Student::all(),
            'kelases' => Kelas::all(),
            'pelayananKarir' => PelayananKarir::where('id', $id)->first(),
            'rekomendasi' => PelayananKarir::whereNotIn('id', [$id])->take(5)->get(),
        ]);
    }

    function detailSaranaPrasarana()
    {
        return view('homepage.sarana-prasarana.detail', [
            'title' => 'Detail Sarana Prasarana Karir',
            'logo' => Logo::first(),
            'navigations' => Navigasi::first(),
            'sectionPrasarana' => SectionPrasarana::first(),
            'prasaranas' => Prasarana::all(),
        ]);
    }
}
