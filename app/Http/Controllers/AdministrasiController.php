<?php

namespace App\Http\Controllers;

use App\Models\Semester;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;

class AdministrasiController extends Controller
{
    function index()
    {
        return view('kesiswaan.administrasi.index', [
            'title' => 'Kesiswaan > Administrasi',
            'tahun_ajarans' => TahunAjaran::paginate(6),
            'semesters' => Semester::paginate(6),
        ]);
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

    function detailSemester($id)
    {
        $semester = Semester::where('id', $id)->first();
        return response()->json($semester);
    }

    function updateSemester($id, Request $request)
    {
        $validatedData = $request->validate([
            'semester' => 'required|string|max:255',
        ]);

        $semester = Semester::where('id', $id)->first()->update($validatedData);

        if ($semester) {
            return redirect(route('siswa-index'))->with('success', 'Berhasil Update Semester!');
        } else {
            return redirect(route('siswa-index'))->with('failed', 'Gagal Update Semester!');
        }
    }
}
