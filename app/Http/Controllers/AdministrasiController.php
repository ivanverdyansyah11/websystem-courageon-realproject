<?php

namespace App\Http\Controllers;

use App\Models\Index;
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
            'indexes' => Index::paginate(6),
        ]);
    }

    function storeTahunAjaran(Request $request)
    {
        $validatedData = $request->validate([
            'tahun' => 'required|string|max:255',
        ]);

        $tahun_ajaran = TahunAjaran::create($validatedData);

        if ($tahun_ajaran) {
            return redirect(route('administrasi-index'))->with('success', 'Berhasil Tambah Tahun Ajaran Sekolah!');
        } else {
            return redirect(route('administrasi-index'))->with('failed', 'Gagal Tambah Tahun Ajaran Sekolah!');
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
            return redirect(route('administrasi-index'))->with('success', 'Berhasil Update Tahun Ajaran Sekolah!');
        } else {
            return redirect(route('administrasi-index'))->with('failed', 'Gagal Update Tahun Ajaran Sekolah!');
        }
    }

    function deleteTahunAjaran($id)
    {
        $tahun_ajaran = TahunAjaran::where('id', $id)->first();

        $tahun_ajaran = $tahun_ajaran->delete();

        if ($tahun_ajaran) {
            return redirect(route('administrasi-index'))->with('success', 'Berhasil Hapus Tahun Ajaran Sekolah!');
        } else {
            return redirect(route('administrasi-index'))->with('failed', 'Gagal Hapus Tahun Ajaran Sekolah!');
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
            return redirect(route('administrasi-index'))->with('success', 'Berhasil Update Semester Sekolah!');
        } else {
            return redirect(route('administrasi-index'))->with('failed', 'Gagal Update Semester Sekolah!');
        }
    }

    function storeKelas(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $kelas = Kelas::create($validatedData);

        if ($kelas) {
            return redirect(route('administrasi-index'))->with('success', 'Berhasil Tambah Kelas Sekolah!');
        } else {
            return redirect(route('administrasi-index'))->with('failed', 'Gagal Tambah Kelas Sekolah!');
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
            return redirect(route('administrasi-index'))->with('success', 'Berhasil Update Kelas Sekolah!');
        } else {
            return redirect(route('administrasi-index'))->with('failed', 'Gagal Update Kelas Sekolah!');
        }
    }

    function deleteKelas($id)
    {
        $kelas = Kelas::where('id', $id)->first();

        $kelas = $kelas->delete();

        if ($kelas) {
            return redirect(route('administrasi-index'))->with('success', 'Berhasil Hapus Kelas Sekolah!');
        } else {
            return redirect(route('administrasi-index'))->with('failed', 'Gagal Hapus Kelas Sekolah!');
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
            return redirect(route('administrasi-index'))->with('success', 'Berhasil Tambah Jurusan Sekolah!');
        } else {
            return redirect(route('administrasi-index'))->with('failed', 'Gagal Tambah Jurusan Sekolah!');
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
            return redirect(route('administrasi-index'))->with('success', 'Berhasil Update Jurusan Sekolah!');
        } else {
            return redirect(route('administrasi-index'))->with('failed', 'Gagal Update Jurusan Sekolah!');
        }
    }

    function deleteJurusan($id)
    {
        $jurusan = Jurusan::where('id', $id)->first();

        $jurusan = $jurusan->delete();

        if ($jurusan) {
            return redirect(route('administrasi-index'))->with('success', 'Berhasil Hapus Jurusan Sekolah!');
        } else {
            return redirect(route('administrasi-index'))->with('failed', 'Gagal Hapus Jurusan Sekolah!');
        }
    }

    function storeIndex(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $index = Index::create($validatedData);

        if ($index) {
            return redirect(route('administrasi-index'))->with('success', 'Berhasil Tambah Index Sekolah!');
        } else {
            return redirect(route('administrasi-index'))->with('failed', 'Gagal Tambah Index Sekolah!');
        }
    }

    function detailIndex($id)
    {
        $index = Index::where('id', $id)->first();
        return response()->json($index);
    }

    function updateIndex($id, Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $index = Index::where('id', $id)->first()->update($validatedData);

        if ($index) {
            return redirect(route('administrasi-index'))->with('success', 'Berhasil Update Index Sekolah!');
        } else {
            return redirect(route('administrasi-index'))->with('failed', 'Gagal Update Index Sekolah!');
        }
    }

    function deleteIndex($id)
    {
        $index = Index::where('id', $id)->first();

        $index = $index->delete();

        if ($index) {
            return redirect(route('administrasi-index'))->with('success', 'Berhasil Hapus Index Sekolah!');
        } else {
            return redirect(route('administrasi-index'))->with('failed', 'Gagal Hapus Index Sekolah!');
        }
    }
}
