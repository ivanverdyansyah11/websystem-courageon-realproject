<?php

namespace App\Http\Controllers;

use App\Models\Index;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\SectionStudent;
use App\Models\Semester;
use App\Models\Student;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function index()
    {
        return view('kesiswaan.siswa.index', [
            'title' => 'Kesiswaan > Siswa',
            'section_student' => SectionStudent::first(),
            'kelases' => Kelas::all(),
            'kelasCount' => Student::groupBy('kelases_id')->selectRaw('count(*) as total')->get(),
        ]);
    }

    public function search($id, Request $request)
    {
        $students = Student::where('kelases_id', $id)
            ->where(function ($query) use ($request) {
                $query->where('nis', 'like', '%' . $request->search . '%')
                    ->orWhere('nisn', 'like', '%' . $request->search . '%')
                    ->orWhere('nama_lengkap', 'like', '%' . $request->search . '%')
                    ->orWhere('tahun_masuk', 'like', '%' . $request->search . '%')
                    ->orWhere('tempat_lahir', 'like', '%' . $request->search . '%')
                    ->orWhere('tanggal_lahir', 'like', '%' . $request->search . '%')
                    ->orWhere('jenis_kelamin', 'like', '%' . $request->search . '%')
                    ->orWhere('kelurahan', 'like', '%' . $request->search . '%')
                    ->orWhere('kecamatan', 'like', '%' . $request->search . '%')
                    ->orWhere('alamat', 'like', '%' . $request->search . '%');
            })
            ->paginate(6);

        return view('kesiswaan.siswa.student-index', [
            'title' => 'Kesiswaan > Data Siswa',
            'kelas' => Kelas::where('id', $id)->first(),
            'students' => $students,
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

    function studentIndex($id)
    {
        return view('kesiswaan.siswa.student-index', [
            'title' => 'Kesiswaan > Data Siswa',
            'kelas' => Kelas::where('id', $id)->first(),
            'students' => Student::where('kelases_id', $id)->paginate(6),
        ]);
    }

    function studentCreate($id)
    {
        return view('kesiswaan.siswa.create', [
            'title' => 'Kesiswaan > Data Siswa',
            'kelas' => Kelas::where('id', $id)->first(),
            'tahun_ajarans' => TahunAjaran::all(),
            'jurusans' => Jurusan::all(),
            'indexes' => Index::all(),
            'semesters' => Semester::all(),
        ]);
    }

    function studentStore($id, Request $request)
    {
        $kelas = Kelas::where('id', $id)->first();

        $validatedData = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'tahun_masuk' => 'required|string|max:255',
            'nis' => 'required|string|max:10',
            'nisn' => 'required|string|max:10',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string',
            'kelurahan' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'alamat' => 'required|string',
            'tahun_ajarans_id' => 'required|string',
            'semesters_id' => 'required|string',
            'jurusans_id' => 'required|string',
            'indices_id' => 'required|string',
        ]);

        $validatedData['kelases_id'] = $kelas->id;

        $student = Student::create($validatedData);

        if ($student) {
            return redirect(route('data-siswa-index', $kelas->id))->with('success', 'Berhasil Tambah Siswa Kelas ' . $kelas->name . ' Sekolah!');
        } else {
            return redirect(route('data-siswa-index', $kelas->id))->with('failed', 'Gagal Tambah Siswa Kelas ' . $kelas->name . ' Sekolah!');
        }
    }

    function studentDetail($id)
    {
        return view('kesiswaan.siswa.detail', [
            'title' => 'Kesiswaan > Data Siswa',
            'student' => Student::where('id', $id)->first(),
            'kelases' => Kelas::all(),
            'tahun_ajarans' => TahunAjaran::all(),
            'jurusans' => Jurusan::all(),
            'indexes' => Index::all(),
            'semesters' => Semester::all(),
        ]);
    }

    function studentEdit($id)
    {
        return view('kesiswaan.siswa.edit', [
            'title' => 'Kesiswaan > Data Siswa',
            'student' => Student::where('id', $id)->first(),
            'kelases' => Kelas::all(),
            'tahun_ajarans' => TahunAjaran::all(),
            'jurusans' => Jurusan::all(),
            'indexes' => Index::all(),
            'semesters' => Semester::all(),
        ]);
    }

    function studentUpdate($id, Request $request)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'tahun_masuk' => 'required|string|max:255',
            'nis' => 'required|string|max:10',
            'nisn' => 'required|string|max:10',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string',
            'kelurahan' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'alamat' => 'required|string',
            'tahun_ajarans_id' => 'required|string',
            'semesters_id' => 'required|string',
            'jurusans_id' => 'required|string',
            'indices_id' => 'required|string',
        ]);

        $validatedData['kelases_id'] = $request->kelases_id;

        $student = Student::where('id', $id)->first()->update($validatedData);

        if ($student) {
            return redirect(route('data-siswa-index', $validatedData['kelases_id']))->with('success', 'Berhasil Tambah Siswa Kelas ' . $validatedData['kelases_id'] . ' Sekolah!');
        } else {
            return redirect(route('data-siswa-index', $validatedData['kelases_id']))->with('failed', 'Gagal Tambah Siswa Kelas ' . $validatedData['kelases_id'] . ' Sekolah!');
        }
    }

    function studentDelete($id)
    {
        $student = Student::where('id', $id)->first();
        $studentAction = $student->delete();

        if ($studentAction) {
            return redirect(route('data-siswa-index', $student['kelases_id']))->with('success', 'Berhasil Tambah Siswa Kelas ' . $student['kelases_id'] . ' Sekolah!');
        } else {
            return redirect(route('data-siswa-index', $student['kelases_id']))->with('failed', 'Gagal Tambah Siswa Kelas ' . $student['kelases_id'] . ' Sekolah!');
        }
    }
}
