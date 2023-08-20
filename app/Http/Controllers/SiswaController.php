<?php

namespace App\Http\Controllers;

use App\Models\SectionStudent;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function index()
    {
        return view('kesiswaan.siswa.index', [
            'title' => 'Kesiswaan > Siswa',
            'section_student' => SectionStudent::first(),
            'tahun_ajarans' => TahunAjaran::paginate(6),
        ]);
    }

    function detailSectionStudent()
    {
        $section_student = SectionStudent::first();
        return response()->json($section_student);
    }

    function updateSectionStudent(Request $request)
    {
        $validatedData = $request->validate([
            'title_section' => 'required|string|max:255',
            'button_1' => 'required|string|max:255',
            'button_2' => 'required|string|max:255',
            'button_3' => 'required|string|max:255',
            'caption_1' => 'required|string|max:255',
            'caption_2' => 'required|string|max:255',
            'caption_3' => 'required|string|max:255',
        ]);

        $section_student = SectionStudent::first()->update($validatedData);

        if ($section_student) {
            return redirect(route('siswa-index'))->with('success', 'Berhasil Update Section Siswa!');
        } else {
            return redirect(route('siswa-index'))->with('failed', 'Gagal Update Section Siswa!');
        }
    }

    function storeTahunAjaran(Request $request)
    {
        $validatedData = $request->validate([
            'tahun' => 'required|string|max:255',
        ]);

        $tahun_ajaran = TahunAjaran::create($validatedData);

        if ($tahun_ajaran) {
            return redirect(route('siswa-index'))->with('success', 'Berhasil Tambah Tahun Ajaran!');
        } else {
            return redirect(route('siswa-index'))->with('failed', 'Gagal Tambah Tahun Ajaran!');
        }
    }

    function detailTahunAjaran($id)
    {
        $tahun_ajaran = TahunAjaran::where('id', $id)->first();
        return response()->json($tahun_ajaran);
    }

    function updateTahunAjaran($id, Request $request)
    {
        $validatedData = $request->validate([
            'tahun' => 'required|string|max:255',
        ]);

        $tahun_ajaran = TahunAjaran::where('id', $id)->first()->update($validatedData);

        if ($tahun_ajaran) {
            return redirect(route('siswa-index'))->with('success', 'Berhasil Update Tahun Ajaran!');
        } else {
            return redirect(route('siswa-index'))->with('failed', 'Gagal Update Tahun Ajaran!');
        }
    }

    function deleteTahunAjaran($id)
    {
        $tahun_ajaran = TahunAjaran::where('id', $id)->first();

        $tahun_ajaran = $tahun_ajaran->delete();

        if ($tahun_ajaran) {
            return redirect(route('siswa-index'))->with('success', 'Berhasil Hapus Tahun Ajaran!');
        } else {
            return redirect(route('siswa-index'))->with('failed', 'Gagal Hapus Tahun Ajaran!');
        }
    }
}
