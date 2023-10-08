<?php

namespace App\Http\Controllers;

use App\Models\HistoryKenaikanSiswa;
use App\Models\Index;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\KenaikanKelas;
use App\Models\SectionGraduation;
use App\Models\Semester;
use App\Models\Student;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelulusanController extends Controller
{
    function index()
    {
        return view('akademik.kelulusan.index', [
            'title' => 'Akademik > Kelulusan',
            'section_graduation' => SectionGraduation::first(),
            'kenaikan_siswa' => HistoryKenaikanSiswa::with('student', 'jurusan', 'kelas', 'index', 'semesters')->paginate(6),
            'kenaikan_kelas' => KenaikanKelas::paginate(6),
            'students' => Student::all(),
            'jurusans' => Jurusan::all(),
            'kelases' => Kelas::all(),
            'indexes' => Index::all(),
            'semesters' => Semester::all(),
            'tahun_ajarans' => TahunAjaran::all(),
        ]);
    }

    public function searchSiswa(Request $request)
    {
        $histories = DB::table("history_kenaikan_siswas")
            ->join("students", "students.id", "=", "history_kenaikan_siswas.students_id")
            ->join("jurusans", "jurusans.id", "=", "history_kenaikan_siswas.jurusans_id")
            ->join("kelas", "kelas.id", "=", "history_kenaikan_siswas.kelases_id")
            ->join("indices", "indices.id", "=", "history_kenaikan_siswas.indexes_id")
            ->join("semesters", "semesters.id", "=", "history_kenaikan_siswas.semesters_id")
            ->where('students.nama_lengkap', 'like', '%' . $request->search . '%')
            ->orWhere('jurusans.name', 'like', '%' . $request->search . '%')
            ->orWhere('kelas.name', 'like', '%' . $request->search . '%')
            ->orWhere('indices.name', 'like', '%' . $request->search . '%')
            ->orWhere('semesters.semester', 'like', '%' . $request->search . '%')
            ->select('history_kenaikan_siswas.id', 'students.nama_lengkap', 'jurusans.name as nama_jurusan', 'kelas.name as nama_kelas', 'indices.name as nama_index', 'semesters.semester')->paginate(6);

        return view('akademik.kelulusan.index', [
            'title' => 'Akademik > Kelulusan',
            'section_graduation' => SectionGraduation::first(),
            'kenaikan_siswa' => $histories,
            'kenaikan_kelas' => KenaikanKelas::paginate(6),
            'students' => Student::all(),
            'jurusans' => Jurusan::all(),
            'kelases' => Kelas::all(),
            'indexes' => Index::all(),
            'semesters' => Semester::all(),
            'tahun_ajarans' => TahunAjaran::all(),
        ]);
    }

    public function searchKelas(Request $request)
    {
        $KenaikanKelas = KenaikanKelas::where('jumlah_siswa_x', 'like', '%' . $request->search . '%')
            ->orWhere('jumlah_siswa_xi', 'like', '%' . $request->search . '%')
            ->orWhere('jumlah_siswa_xii', 'like', '%' . $request->search . '%')
            ->orWhere('nilai_tertinggi', 'like', '%' . $request->search . '%')
            ->orWhere('nilai_terendah', 'like', '%' . $request->search . '%')
            ->orWhere('rata_nilai', 'like', '%' . $request->search . '%')
            ->orWhere('total_siswa', 'like', '%' . $request->search . '%')
            ->orWhere('tahun_ajaran', 'like', '%' . $request->search . '%')
            ->paginate(6);

        return view('akademik.kelulusan.index', [
            'title' => 'Akademik > Kelulusan',
            'section_graduation' => SectionGraduation::first(),
            'kenaikan_siswa' => HistoryKenaikanSiswa::paginate(6),
            'kenaikan_kelas' => $KenaikanKelas,
            'students' => Student::all(),
            'jurusans' => Jurusan::all(),
            'kelases' => Kelas::all(),
            'indexes' => Index::all(),
            'semesters' => Semester::all(),
            'tahun_ajarans' => TahunAjaran::all(),
        ]);
    }

    function detailSectionGraduation()
    {
        $section_graduation = SectionGraduation::first();
        return response()->json($section_graduation);
    }

    function updateSectionGraduation(Request $request)
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

        $section_graduation = SectionGraduation::first()->update($validatedData);

        if ($section_graduation) {
            return redirect(route('kelulusan-index'))->with('success', 'Berhasil Update Section Kelulusan!');
        } else {
            return redirect(route('kelulusan-index'))->with('failed', 'Gagal Update Section Kelulusan!');
        }
    }

    function storeKenaikanSiswa(Request $request)
    {
        $validatedData = $request->validate([
            'students_id' => 'required|string',
            'jurusans_id' => 'required|string',
            'kelases_id' => 'required|string',
            'indexes_id' => 'required|string',
            'semesters_id' => 'required|string',
        ]);

        $kenaikanSiswa = HistoryKenaikanSiswa::create($validatedData);

        $siswa = Student::where('id', $validatedData['students_id'])->update([
            'jurusans_id' => $validatedData['jurusans_id'],
            'kelases_id' => $validatedData['kelases_id'],
            'indices_id' => $validatedData['indexes_id'],
            'semesters_id' => $validatedData['semesters_id'],
        ]);

        if ($kenaikanSiswa && $siswa) {
            return redirect(route('kelulusan-index'))->with('success', 'Berhasil Tambah Kenaikan Siswa!');
        } else {
            return redirect(route('kelulusan-index'))->with('failed', 'Gagal Tambah Kenaikan Siswa!');
        }
    }

    function detailKenaikanSiswa($id)
    {
        $kenaikanSiswa = HistoryKenaikanSiswa::where('id', $id)->first();
        $students = Student::all();
        $jurusans = Jurusan::all();
        $kelases = Kelas::all();
        $indexes = Index::all();
        $semesters = Semester::all();

        foreach ($students as $student) {
            if ($student->id === $kenaikanSiswa->students_id) {
                $kenaikanSiswa->student_nama = $student->nama_lengkap;
            }
        }

        foreach ($jurusans as $jurusan) {
            if ($jurusan->id === $kenaikanSiswa->jurusans_id) {
                $kenaikanSiswa->jurusan_nama = $jurusan->name;
            }
        }

        foreach ($kelases as $kelas) {
            if ($kelas->id === $kenaikanSiswa->kelases_id) {
                $kenaikanSiswa->kelas_nama = $kelas->name;
            }
        }

        foreach ($indexes as $index) {
            if ($index->id === $kenaikanSiswa->indexes_id) {
                $kenaikanSiswa->index_nama = $index->name;
            }
        }

        foreach ($semesters as $semester) {
            if ($semester->id === $kenaikanSiswa->semesters_id) {
                $kenaikanSiswa->semester_nama = $semester->semester;
            }
        }

        return response()->json($kenaikanSiswa);
    }

    function updateKenaikanSiswa($id, Request $request)
    {
        $validatedData = $request->validate([
            'students_id' => 'required|string',
            'jurusans_id' => 'required|string',
            'kelases_id' => 'required|string',
            'indexes_id' => 'required|string',
            'semesters_id' => 'required|string',
        ]);

        $kenaikanSiswa = HistoryKenaikanSiswa::where('id', $id)->first()->update($validatedData);

        if ($kenaikanSiswa) {
            return redirect(route('kelulusan-index'))->with('success', 'Berhasil Edit Kenaikan Siswa!');
        } else {
            return redirect(route('kelulusan-index'))->with('failed', 'Gagal Edit Kenaikan Siswa!');
        }
    }

    function deleteKenaikanSiswa($id)
    {
        $kenaikanSiswa = HistoryKenaikanSiswa::where('id', $id)->first();
        $kenaikanSiswa = $kenaikanSiswa->delete();

        if ($kenaikanSiswa) {
            return redirect(route('kelulusan-index'))->with('success', 'Berhasil Hapus Kenaikan Siswa!');
        } else {
            return redirect(route('kelulusan-index'))->with('failed', 'Gagal Hapus Kenaikan Siswa!');
        }
    }

    function storeKenaikanKelas(Request $request)
    {
        if ($request->gender == '') {
            return redirect(route('kelulusan-index'))->with('failed', 'Isi Form Jenis Kelamin Terlebih Dahulu!');
        }

        $validatedData = $request->validate([
            'jumlah_siswa_x' => 'required',
            'jumlah_siswa_xi' => 'required',
            'jumlah_siswa_xii' => 'required',
            'gender' => 'required',
            'nilai_tertinggi' => 'required',
            'nilai_terendah' => 'required',
            'total_siswa' => 'required',
            'rata_nilai' => 'required',
            'tahun_ajaran' => 'required',
        ]);

        $kenaikanKelas = KenaikanKelas::create($validatedData);

        if ($kenaikanKelas) {
            return redirect(route('kelulusan-index'))->with('success', 'Berhasil Tambah Kenaikan Kelas!');
        } else {
            return redirect(route('kelulusan-index'))->with('failed', 'Gagal Tambah Kenaikan Kelas!');
        }
    }

    function detailKenaikanKelas($id)
    {
        $kenaikanKelas = KenaikanKelas::where('id', $id)->first();
        $tahun_ajarans = TahunAjaran::all();

        foreach ($tahun_ajarans as $tahun_ajaran) {
            if ($tahun_ajaran->id === $kenaikanKelas->tahun_ajarans_id) {
                $kenaikanKelas->tahun = $tahun_ajaran->tahun;
            }
        }

        return response()->json($kenaikanKelas);
    }

    function updateKenaikanKelas($id, Request $request)
    {
        if ($request->gender == '') {
            return redirect(route('kelulusan-index'))->with('failed', 'Isi Form Jenis Kelamin Terlebih Dahulu!');
        }

        $validatedData = $request->validate([
            'jumlah_siswa_x' => 'required',
            'jumlah_siswa_xi' => 'required',
            'jumlah_siswa_xii' => 'required',
            'gender' => 'required',
            'nilai_tertinggi' => 'required',
            'nilai_terendah' => 'required',
            'total_siswa' => 'required',
            'rata_nilai' => 'required',
            'tahun_ajaran' => 'required',
        ]);

        $kenaikanKelas = KenaikanKelas::where('id', $id)->first()->update($validatedData);

        if ($kenaikanKelas) {
            return redirect(route('kelulusan-index'))->with('success', 'Berhasil Edit Kenaikan Kelas!');
        } else {
            return redirect(route('kelulusan-index'))->with('failed', 'Gagal Edit Kenaikan Kelas!');
        }
    }

    function deleteKenaikanKelas($id)
    {
        $kenaikanKelas = KenaikanKelas::where('id', $id)->first();
        $kenaikanKelas = $kenaikanKelas->delete();

        if ($kenaikanKelas) {
            return redirect(route('kelulusan-index'))->with('success', 'Berhasil Hapus Kenaikan Kelas!');
        } else {
            return redirect(route('kelulusan-index'))->with('failed', 'Gagal Hapus Kenaikan Kelas!');
        }
    }
}
