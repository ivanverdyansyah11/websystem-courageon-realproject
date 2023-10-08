<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Models\BeasiswaPenerima;
use App\Models\SectionBeasiswa;
use App\Models\Student;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeasiswaController extends Controller
{
    function index()
    {
        return view('kesiswaan.beasiswa.index', [
            'title' => 'Kesiswaan > Beasiswa',
            'section_beasiswa' => SectionBeasiswa::first(),
            'beasiswas' => Beasiswa::paginate(6),
            'penerima_beasiswa' => BeasiswaPenerima::paginate(6),
            'allBeasiswa' => Beasiswa::all(),
            'students' => Student::all(),
            'tahun_ajarans' => TahunAjaran::all(),
        ]);
    }

    public function search(Request $request)
    {
        $beasiswas = DB::table("beasiswa_penerimas")->join("students", "students.id", "=", "beasiswa_penerimas.students_id")
            ->where('beasiswa_penerimas.tahun', 'like', '%' . $request->search . '%')
            ->orWhere('beasiswa_penerimas.digunakan_untuk', 'like', '%' . $request->search . '%')
            ->orWhere('beasiswa_penerimas.jumlah_beasiswa', 'like', '%' . $request->search . '%')
            ->orWhere('students.nama_lengkap', 'like', '%' . $request->search . '%')
            ->select('beasiswa_penerimas.*', 'students.nama_lengkap')->paginate(6);

        return view('kesiswaan.beasiswa.index', [
            'title' => 'Kesiswaan > Beasiswa',
            'section_beasiswa' => SectionBeasiswa::first(),
            'beasiswas' => Beasiswa::paginate(6),
            'penerima_beasiswa' => $beasiswas,
            'allBeasiswa' => Beasiswa::all(),
            'students' => Student::all(),
            'tahun_ajarans' => TahunAjaran::all(),
        ]);
    }

    function detailSection()
    {
        $section_beasiswa = SectionBeasiswa::first();
        return response()->json($section_beasiswa);
    }

    function updateSection(Request $request)
    {
        $validatedData = $request->validate([
            'title_section' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $sectionBeasiswa = SectionBeasiswa::first()->update($validatedData);

        if ($sectionBeasiswa) {
            return redirect(route('beasiswa-index'))->with('success', 'Berhasil Update Section Beasiswa!');
        } else {
            return redirect(route('beasiswa-index'))->with('failed', 'Gagal Update Section Beasiswa!');
        }
    }

    function storeBeasiswa(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $Beasiswa = Beasiswa::create($validatedData);

        if ($Beasiswa) {
            return redirect(route('beasiswa-index'))->with('success', 'Berhasil Tambah Beasiswa Sekolah!');
        } else {
            return redirect(route('beasiswa-index'))->with('failed', 'Gagal Tambah Beasiswa Sekolah!');
        }
    }

    function detailBeasiswa($id)
    {
        $beasiswa = Beasiswa::where('id', $id)->first();
        return response()->json($beasiswa);
    }

    function updateBeasiswa($id, Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $Beasiswa = Beasiswa::where('id', $id)->first()->update($validatedData);

        if ($Beasiswa) {
            return redirect(route('beasiswa-index'))->with('success', 'Berhasil Update Beasiswa Sekolah!');
        } else {
            return redirect(route('beasiswa-index'))->with('failed', 'Gagal Update Beasiswa Sekolah!');
        }
    }

    function deleteBeasiswa($id)
    {
        $beasiswa = Beasiswa::where('id', $id)->first();

        $beasiswa = $beasiswa->delete();

        if ($beasiswa) {
            return redirect(route('beasiswa-index'))->with('success', 'Berhasil Hapus Beasiswa Sekolah!');
        } else {
            return redirect(route('beasiswa-index'))->with('failed', 'Gagal Hapus Beasiswa Sekolah!');
        }
    }

    function storePenerimaBeasiswa(Request $request)
    {
        $validatedData = $request->validate([
            'tahun' => 'required|string|max:255',
            'digunakan_untuk' => 'required|string',
            'jumlah_beasiswa' => 'required|string|max:255',
            'students_id' => 'required|string',
            'beasiswas_id' => 'required|string',
        ]);

        $beasiswaPenerima = BeasiswaPenerima::create($validatedData);

        if ($beasiswaPenerima) {
            return redirect(route('beasiswa-index'))->with('success', 'Berhasil Tambah Penerima Beasiswa Sekolah!');
        } else {
            return redirect(route('beasiswa-index'))->with('failed', 'Gagal Tambah Penerima Beasiswa Sekolah!');
        }
    }

    function detailPenerimaBeasiswa($id)
    {
        $penerima_beasiswa = BeasiswaPenerima::where('id', $id)->first();
        $students = Student::all();
        $beasiswas = Beasiswa::all();
        $tahun_ajarans = TahunAjaran::all();

        foreach ($students as $student) {
            if ($student->id === $penerima_beasiswa->students_id) {
                $penerima_beasiswa->student_nama = $student->nama_lengkap;
                $penerima_beasiswa->student_nis = $student->nis;
            }
        }

        foreach ($beasiswas as $beasiswa) {
            if ($beasiswa->id === $penerima_beasiswa->beasiswas_id) {
                $penerima_beasiswa->nama_beasiswa = $beasiswa->title;
            }
        }

        foreach ($tahun_ajarans as $tahun_ajaran) {
            if ($tahun_ajaran->tahun == $penerima_beasiswa->tahun) {
                $penerima_beasiswa->tahun_beasiswa = $tahun_ajaran->tahun;
            }
        }

        return response()->json($penerima_beasiswa);
    }

    function updatePenerimaBeasiswa($id, Request $request)
    {
        $validatedData = $request->validate([
            'tahun' => 'required|string|max:255',
            'digunakan_untuk' => 'required|string',
            'jumlah_beasiswa' => 'required|string|max:255',
            'students_id' => 'required|string',
            'beasiswas_id' => 'required|string',
        ]);

        $beasiswaPenerima = BeasiswaPenerima::where('id', $id)->first()->update($validatedData);

        if ($beasiswaPenerima) {
            return redirect(route('beasiswa-index'))->with('success', 'Berhasil Edit Penerima Beasiswa Sekolah!');
        } else {
            return redirect(route('beasiswa-index'))->with('failed', 'Gagal Edit Penerima Beasiswa Sekolah!');
        }
    }

    function deletePenerimaBeasiswa($id)
    {
        $beasiswaPenerima = BeasiswaPenerima::where('id', $id)->first();
        $beasiswaPenerima = $beasiswaPenerima->delete();

        if ($beasiswaPenerima) {
            return redirect(route('beasiswa-index'))->with('success', 'Berhasil Hapus Penerima Beasiswa Sekolah!');
        } else {
            return redirect(route('beasiswa-index'))->with('failed', 'Gagal Hapus Penerima Beasiswa Sekolah!');
        }
    }
}
