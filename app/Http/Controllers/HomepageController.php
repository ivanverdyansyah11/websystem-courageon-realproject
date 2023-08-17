<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    function beranda()
    {
        return view('homepage.beranda.index', [
            'title' => 'Beranda',
        ]);
    }

    function profil()
    {
        return view('homepage.profil.index', [
            'title' => 'Profil',
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

    function ekstrakurikuler()
    {
        return view('homepage.ekstrakurikuler.index', [
            'title' => 'Ekstrakurikuler',
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
}
