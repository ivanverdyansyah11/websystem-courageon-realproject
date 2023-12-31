<?php

namespace App\Http\Controllers;

use App\Exports\AlumniExport;
use App\Models\Alumni;
use App\Models\SectionAlumni;
use App\Models\Student;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class AlumniController extends Controller
{
    function index()
    {
        return view('kesiswaan.alumni.index', [
            'title' => 'Kesiswaan > Alumni',
            'section_alumni' => SectionAlumni::first(),
            'testimonials' => Alumni::with('student')->paginate(6),
            'students' => Student::all(),
            'tahun_ajarans' => TahunAjaran::all(),
        ]);
    }

    public function search(Request $request)
    {
        $testimonials = DB::table("alumnis")->join("students", "students.id", "=", "alumnis.students_id")
            ->where('alumnis.tahun_ajaran_lulus', 'like', '%' . $request->search . '%')
            ->orWhere('alumnis.pekerjaan', 'like', '%' . $request->search . '%')
            ->orWhere('alumnis.testimoni', 'like', '%' . $request->search . '%')
            ->orWhere('students.nama_lengkap', 'like', '%' . $request->search . '%')
            ->select('alumnis.*', 'students.nama_lengkap')->paginate(6);

        return view('kesiswaan.alumni.index', [
            'title' => 'Kesiswaan > Alumni',
            'section_alumni' => SectionAlumni::first(),
            'testimonials' => $testimonials,
            'students' => Student::all(),
            'tahun_ajarans' => TahunAjaran::all(),
        ]);
    }

    public function generate()
    {
        return Excel::download(new AlumniExport, 'data-alumni.xlsx');
    }

    function detailSection()
    {
        $section_alumni = SectionAlumni::first();
        return response()->json($section_alumni);
    }

    function updateSection(Request $request)
    {
        $validatedData = $request->validate([
            'title_section' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $sectionAlumni = SectionAlumni::first()->update($validatedData);

        if ($sectionAlumni) {
            return redirect(route('alumni-index'))->with('success', 'Berhasil Update Section Alumni!');
        } else {
            return redirect(route('alumni-index'))->with('failed', 'Gagal Update Section Alumni!');
        }
    }

    function createAlumni()
    {
        return view('kesiswaan.alumni.add', [
            'title' => 'Kesiswaan > Alumni',
            'students' => Student::all(),
            'tahun_ajarans' => TahunAjaran::all(),
        ]);
    }

    function detailAlumni($id)
    {
        $alumni = Alumni::where('id', $id)->first();
        $students = Student::all();
        $tahun_ajarans = TahunAjaran::all();

        foreach ($students as $student) {
            if ($student->id === $alumni->students_id) {
                $students_nama = $student->nama_lengkap;
            }
        }

        foreach ($tahun_ajarans as $tahun_ajaran) {
            if ($tahun_ajaran->id == $alumni->tahun_ajaran_lulus) {
                $tahun_ajaran_lulus = $tahun_ajaran->tahun;
            }
        }

        return view('kesiswaan.alumni.detail', [
            'title' => 'Akademik > Alumni',
            'alumni' => $alumni,
            'students_nama' => $students_nama,
            'tahun_ajaran_lulus' => $tahun_ajaran_lulus,
        ]);
    }

    function editAlumni($id)
    {
        $alumni = Alumni::where('id', $id)->first();

        return view('kesiswaan.alumni.edit', [
            'title' => 'Akademik > Alumni',
            'alumni' => $alumni,
            'students' => Student::all(),
            'tahun_ajarans' => TahunAjaran::all(),
        ]);
    }

    function storeAlumni(Request $request)
    {
        $validatedData = $request->validate([
            'profile' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'tahun_ajaran_lulus' => 'required|string',
            'pekerjaan' => 'required|string|max:255',
            'students_id' => 'required|string',
            'testimoni' => 'required|string',
        ]);

        if ($validatedData['profile']) {
            $image = $request->file('profile');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/kesiswaan-images/alumni-image/'), $imageName);
            $validatedData['profile'] = $imageName;
        }

        $alumni = Alumni::create($validatedData);

        if ($alumni) {
            return redirect(route('alumni-index'))->with('success', 'Berhasil Tambah Alumni Sekolah!');
        } else {
            return redirect(route('alumni-create'))->with('failed', 'Gagal Tambah Alumni Sekolah!');
        }
    }

    function updateAlumni($id, Request $request)
    {
        $alumni = Alumni::where('id', $id)->first();

        $validatedData = $request->validate([
            'tahun_ajaran_lulus' => 'required|string',
            'pekerjaan' => 'required|string|max:255',
            'students_id' => 'required|string',
            'testimoni' => 'required|string',
        ]);

        if ($request->file('profile')) {
            if (file_exists(public_path('assets/img/kesiswaan-images/alumni-image/') . $alumni['profile']) && $alumni['profile']) {
                $oldImagePath = public_path('assets/img/kesiswaan-images/alumni-image/') . $alumni['profile'];
                unlink($oldImagePath);
            }

            $image = $request->file('profile');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/kesiswaan-images/alumni-image/'), $imageName);
            $validatedData['profile'] = $imageName;
        } else {
            $validatedData['profile'] = $alumni['profile'];
        }

        $alumniAction = Alumni::where('id', $id)->update($validatedData);

        if ($alumniAction) {
            return redirect(route('alumni-index'))->with('success', 'Berhasil Edit Alumni Sekolah!');
        } else {
            return redirect(route('alumni-edit'))->with('failed', 'Gagal Edit Alumni Sekolah!');
        }
    }

    function deleteAlumni($id)
    {
        $alumni = Alumni::where('id', $id)->first();
        if ($alumni->profile) {
            if (public_path('assets/img/kesiswaan-images/alumni-image/') . $alumni->profile && $alumni->profile) {
                $imagePath = public_path('assets/img/kesiswaan-images/alumni-image/') . $alumni->profile;
                unlink($imagePath);
            }
        }

        $alumni = $alumni->delete();

        if ($alumni) {
            return redirect(route('alumni-index'))->with('success', 'Berhasil Delete Alumni Sekolah!');
        } else {
            return redirect(route('alumni-index'))->with('failed', 'Gagal Delete Alumni Sekolah!');
        }
    }
}
