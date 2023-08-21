<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Employee;
use App\Models\HeaderHome;
use App\Models\HeaderProfile;
use App\Models\HistoryHome;
use App\Models\Logo;
use App\Models\Mars;
use App\Models\Motto;
use App\Models\OpeningHome;
use App\Models\RemarkHome;
use App\Models\SectionContact;
use App\Models\SectionManagement;
use App\Models\SectionStaff;
use App\Models\SectionTeacher;
use App\Models\VisionMission;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    function beranda()
    {
        return view('homepage.beranda.index', [
            'title' => 'Beranda',
            'headerHome' => HeaderHome::first(),
            'openingHome' => OpeningHome::first(),
            'remarkHome' => RemarkHome::first(),
            'historyHome' => HistoryHome::first(),
        ]);
    }

    function profil()
    {
        return view('homepage.profil.index', [
            'title' => 'Profil',
            'headerProfile' => HeaderProfile::first(),
            'visiMision' => VisionMission::first(),
            'motto' => Motto::first(),
            'logo' => Logo::first(),
            'mars' => Mars::first(),
            'sectionManagement' => SectionManagement::first(),
            'managements' => Employee::where('id', '1')->get(),
            'sectionTeacher' => SectionTeacher::first(),
            'teachers' => Employee::where('id', '2')->get(),
            'sectionStaff' => SectionStaff::first(),
            'staffs' => Employee::where('id', '3')->get(),
            'sectionContact' => SectionContact::first(),
            'contacts' => Contact::all(),
        ]);
    }

    function akademik()
    {
        return view('homepage.akademik.index', [
            'title' => 'Akademik',
        ]);
    }

    function kesiswaan()
    {
        return view('homepage.kesiswaan.index', [
            'title' => 'Kesiswaan',
        ]);
    }

    function saranaPrasarana()
    {
        return view('homepage.sarana-prasarana.index', [
            'title' => 'Sarana Prasarana',
        ]);
    }

    function humas()
    {
        return view('homepage.humas.index', [
            'title' => 'Humas',
        ]);
    }

    function prestasi()
    {
        return view('homepage.prestasi.index', [
            'title' => 'Prestasi',
        ]);
    }

    function detailPrestasi($id)
    {
        return view('homepage.prestasi.detail', [
            'title' => 'Detail Prestasi',
        ]);
    }

    function berita()
    {
        return view('homepage.berita.index', [
            'title' => 'Berita',
        ]);
    }

    function manajemen()
    {
        return view('homepage.manajemen.index', [
            'title' => 'Manajemen',
        ]);
    }

    function guru()
    {
        return view('homepage.guru.index', [
            'title' => 'Guru',
        ]);
    }

    function pegawai()
    {
        return view('homepage.pegawai.index', [
            'title' => 'Pegawai',
        ]);
    }

    function projek()
    {
        return view('homepage.projek.index', [
            'title' => 'Projek 5P',
        ]);
    }

    function detailProjek($id)
    {
        return view('homepage.projek.detail', [
            'title' => 'Detail Projek 5P',
        ]);
    }

    function detailEkstrakurikuler()
    {
        return view('homepage.ekstrakurikuler.detail', [
            'title' => 'Detail Ekstrakurikuler',
        ]);
    }

    function pelayanan()
    {
        return view('homepage.pelayanan.index', [
            'title' => 'Pelayanan Karir',
        ]);
    }

    function detailPelayanan($id)
    {
        return view('homepage.pelayanan.detail', [
            'title' => 'Detail Pelayanan Karir',
        ]);
    }

    function detailSaranaPrasarana()
    {
        return view('homepage.sarana-prasarana.detail', [
            'title' => 'Detail Sarana Prasarana Karir',
        ]);
    }
}
