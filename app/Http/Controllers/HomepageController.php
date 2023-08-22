<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Beasiswa;
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
use App\Models\Journal;
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
use App\Models\VisionMission;
use CreateSectionGraduationsTable;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    function beranda()
    {
        return view('homepage.beranda.index', [
            'title' => 'Beranda',
            'logo' => Logo::first(),
            'navigations' => Navigasi::first(),
            'headerHome' => HeaderHome::first(),
            'openingHome' => OpeningHome::first(),
            'remarkHome' => RemarkHome::first(),
            'sectionAchievement' => SectionAchievement::first(),
            'achievements' => Prestasi::take(4)->get(),
            'sectionAlumni' => SectionAlumni::first(),
            'alumnis' => Alumni::with('students')->get(),
            'historyHome' => HistoryHome::first(),
            'sectionJournal' => SectionJournal::first(),
            'journals' => Journal::take(4)->get(),
        ]);
    }

    function profil()
    {
        return view('homepage.profil.index', [
            'title' => 'Profil',
            'logo' => Logo::first(),
            'navigations' => Navigasi::first(),
            'headerProfile' => HeaderProfile::first(),
            'visiMision' => VisionMission::first(),
            'motto' => Motto::first(),
            'logo' => Logo::first(),
            'mars' => Mars::first(),
            'sectionManagement' => SectionManagement::first(),
            'managements' => Employee::where('role_employees_id', '1')->take(4)->get(),
            'sectionTeacher' => SectionTeacher::first(),
            'teachers' => Employee::where('role_employees_id', '2')->take(4)->get(),
            'sectionStaff' => SectionStaff::first(),
            'staffs' => Employee::where('role_employees_id', '3')->take(4)->get(),
            'sectionContact' => SectionContact::first(),
            'contacts' => Contact::all(),
        ]);
    }

    function akademik()
    {
        return view('homepage.akademik.index', [
            'title' => 'Akademik',
            'logo' => Logo::first(),
            'navigations' => Navigasi::first(),
            'headerAcademic' => HeaderAcademic::first(),
            'curriculum' => Curriculum::first(),
            'sectionProgram' => SectionProgram::first(),
            'programs' => Program::all(),
            'sectionProyek' => SectionProyek::first(),
            'projects' => Project::take(4)->get(),
            'sectionGallery' => SectionGallery::first(),
            'galleries' => Gallery::all(),
            'sectionGraduation' => SectionGraduation::first(),
        ]);
    }

    function kesiswaan()
    {
        return view('homepage.kesiswaan.index', [
            'title' => 'Kesiswaan',
            'logo' => Logo::first(),
            'navigations' => Navigasi::first(),
            'headerStudent' => HeaderStudent::first(),
            'sectionStudent' => SectionStudent::first(),
            'sectionExtracurricular' => SectionExtracurricular::first(),
            'extracurriculars' => Extracurricular::all(),
            'sectionService' => SectionService::first(),
            'pelayananKarir' => PelayananKarir::take(4)->get(),
            'sectionAchievement' => SectionAchievement::first(),
            'achievements' => Prestasi::take(4)->get(),
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
            'headerSaranaPrasarana' => HeaderSaranaPrasarana::first(),
            'sectionPrasarana' => SectionPrasarana::first(),
            'prasaranas' => Prasarana::take(4)->get(),
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
            'headerHumas' => HeaderHumas::first(),
            'SectionKemitraan' => SectionKemitraan::first(),
            'partnerships' => Partnership::all(),
            'sectionJournal' => SectionJournal::first(),
            'journals' => Journal::take(4)->get(),
        ]);
    }

    function prestasi()
    {
        return view('homepage.prestasi.index', [
            'title' => 'Prestasi',
            'sectionAchievement' => SectionAchievement::first(),
            'achievements' => Prestasi::all(),
        ]);
    }

    function detailPrestasi($id)
    {
        return view('homepage.prestasi.detail', [
            'title' => 'Detail Prestasi',
            'achievement' => Prestasi::where('id', $id)->first(),
            'rekomendasi' => Prestasi::whereNotIn('id', [$id])->get(),
        ]);
    }

    function berita()
    {
        return view('homepage.berita.index', [
            'title' => 'Berita',
            'sectionJournal' => SectionJournal::first(),
            'journals' => Journal::all(),
        ]);
    }

    function manajemen()
    {
        return view('homepage.manajemen.index', [
            'title' => 'Manajemen',
            'sectionManagement' => SectionManagement::first(),
            'managements' => Employee::where('role_employees_id', '1')->get(),
        ]);
    }

    function guru()
    {
        return view('homepage.guru.index', [
            'title' => 'Guru',
            'sectionTeacher' => SectionTeacher::first(),
            'teachers' => Employee::where('role_employees_id', '2')->take(4)->get(),
        ]);
    }

    function pegawai()
    {
        return view('homepage.pegawai.index', [
            'title' => 'Pegawai',
            'sectionStaff' => SectionStaff::first(),
            'staffs' => Employee::where('role_employees_id', '3')->take(4)->get(),
        ]);
    }

    function projek()
    {
        return view('homepage.projek.index', [
            'title' => 'Projek 5P',
            'sectionProyek' => SectionProyek::first(),
            'projects' => Project::all(),
        ]);
    }

    function detailProjek($id)
    {
        return view('homepage.projek.detail', [
            'title' => 'Detail Projek 5P',
            'project' => Project::where('id', $id)->first(),
            'rekomendasi' => Project::whereNotIn('id', [$id])->get(),
        ]);
    }

    function detailEkstrakurikuler($id)
    {
        return view('homepage.ekstrakurikuler.detail', [
            'title' => 'Detail Ekstrakurikuler',
            'extracurriculars' => Extracurricular::where('id', $id)->first(),
            'rekomendasi' => Extracurricular::whereNotIn('id', [$id])->get(),
        ]);
    }

    function pelayanan()
    {
        return view('homepage.pelayanan.index', [
            'title' => 'Pelayanan Karir',
            'sectionService' => SectionService::first(),
            'pelayananKarir' => PelayananKarir::all(),
        ]);
    }

    function detailPelayanan($id)
    {
        return view('homepage.pelayanan.detail', [
            'title' => 'Detail Pelayanan Karir',
            'pelayananKarir' => PelayananKarir::where('id', $id)->first(),
            'rekomendasi' => PelayananKarir::whereNotIn('id', [$id])->get(),
        ]);
    }

    function detailSaranaPrasarana()
    {
        return view('homepage.sarana-prasarana.detail', [
            'title' => 'Detail Sarana Prasarana Karir',
            'sectionPrasarana' => SectionPrasarana::first(),
            'prasaranas' => Prasarana::all(),
        ]);
    }
}
