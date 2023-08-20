<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Kelas;
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
            'kelases' => Kelas::paginate(6),
            'jurusans' => Jurusan::paginate(6),
        ]);
    }

    function storeTahunAjaran(Request $request)
    {
        $validatedData = $request->validate([
            'tahun' => 'required|string|max:255',
        ]);

        $tahun_ajaran = TahunAjaran::create($validatedData);

        if ($tahun_ajaran) {
            return redirect(route('administrasi-index'))->with('success', 'Berhasil Tambah Tahun Ajaran!');
        } else {
            return redirect(route('administrasi-index'))->with('failed', 'Gagal Tambah Tahun Ajaran!');
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
            return redirect(route('administrasi-index'))->with('success', 'Berhasil Update Tahun Ajaran!');
        } else {
            return redirect(route('administrasi-index'))->with('failed', 'Gagal Update Tahun Ajaran!');
        }
    }

    function deleteTahunAjaran($id)
    {
        $tahun_ajaran = TahunAjaran::where('id', $id)->first();

        $tahun_ajaran = $tahun_ajaran->delete();

        if ($tahun_ajaran) {
            return redirect(route('administrasi-index'))->with('success', 'Berhasil Hapus Tahun Ajaran!');
        } else {
            return redirect(route('administrasi-index'))->with('failed', 'Gagal Hapus Tahun Ajaran!');
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
            return redirect(route('administrasi-index'))->with('success', 'Berhasil Update Semester!');
        } else {
            return redirect(route('administrasi-index'))->with('failed', 'Gagal Update Semester!');
        }
    }

    function storeKelas(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $kelas = Kelas::create($validatedData);

        if ($kelas) {
            return redirect(route('administrasi-index'))->with('success', 'Berhasil Tambah Kelas!');
        } else {
            return redirect(route('administrasi-index'))->with('failed', 'Gagal Tambah Kelas!');
        }
    }

    function detailKelas($id)
    {
        $kelas = Kelas::where('id', $id)->first();
        return response()->json($kelas);
    }

    function updateKelas($id, Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $kelas = Kelas::where('id', $id)->first()->update($validatedData);

        if ($kelas) {
            return redirect(route('administrasi-index'))->with('success', 'Berhasil Update Kelas!');
        } else {
            return redirect(route('administrasi-index'))->with('failed', 'Gagal Update Kelas!');
        }
    }

    function deleteKelas($id)
    {
        $kelas = Kelas::where('id', $id)->first();

        $kelas = $kelas->delete();

        if ($kelas) {
            return redirect(route('administrasi-index'))->with('success', 'Berhasil Hapus Kelas!');
        } else {
            return redirect(route('administrasi-index'))->with('failed', 'Gagal Hapus Kelas!');
        }
    }

    function storeJurusan(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255',
        ]);

        $jurusan = Jurusan::create($validatedData);

        if ($jurusan) {
            return redirect(route('administrasi-index'))->with('success', 'Berhasil Tambah Jurusan!');
        } else {
            return redirect(route('administrasi-index'))->with('failed', 'Gagal Tambah Jurusan!');
        }
    }

    function detailJurusan($id)
    {
        $jurusan = Jurusan::where('id', $id)->first();
        return response()->json($jurusan);
    }

    function updateJurusan($id, Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255',
        ]);

        $jurusan = Jurusan::where('id', $id)->first()->update($validatedData);

        if ($jurusan) {
            return redirect(route('administrasi-index'))->with('success', 'Berhasil Update Jurusan!');
        } else {
            return redirect(route('administrasi-index'))->with('failed', 'Gagal Update Jurusan!');
        }
    }

    function deleteJurusan($id)
    {
        $jurusan = Jurusan::where('id', $id)->first();

        $jurusan = $jurusan->delete();

        if ($jurusan) {
            return redirect(route('administrasi-index'))->with('success', 'Berhasil Hapus Jurusan!');
        } else {
            return redirect(route('administrasi-index'))->with('failed', 'Gagal Hapus Jurusan!');
        }
    }
}
