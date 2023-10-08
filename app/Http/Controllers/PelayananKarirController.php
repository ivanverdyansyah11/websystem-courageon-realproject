<?php

namespace App\Http\Controllers;

use App\Models\PelayananKarir;
use App\Models\PembinaanSiswa;
use App\Models\SectionService;
use App\Models\Student;
use Illuminate\Http\Request;

class PelayananKarirController extends Controller
{
    function index()
    {
        return view('kesiswaan.pelayanan-karir.index', [
            'title' => 'Kesiswaan > Pelayanan Karir',
            'section_service' => SectionService::first(),
            'students' => Student::all(),
            'pelayanan_karir' => PelayananKarir::paginate(6),
            'pembinaan_siswa' => PembinaanSiswa::paginate(6),
        ]);
    }

    public function searchKarir(Request $request)
    {
        $pelayanans = PelayananKarir::where('tanggal', 'like', '%' . $request->search . '%')
            ->orWhere('judul', 'like', '%' . $request->search . '%')
            ->orWhere('masalah', 'like', '%' . $request->search . '%')
            ->orWhere('solusi', 'like', '%' . $request->search . '%')
            ->paginate(6);

        return view('kesiswaan.pelayanan-karir.index', [
            'title' => 'Kesiswaan > Pelayanan Karir',
            'section_service' => SectionService::first(),
            'students' => Student::all(),
            'pelayanan_karir' => $pelayanans,
            'pembinaan_siswa' => PembinaanSiswa::paginate(6),
        ]);
    }

    public function searchSiswa(Request $request)
    {
        $pelayanans = PelayananKarir::where('tanggal', 'like', '%' . $request->search . '%')
            ->orWhere('judul', 'like', '%' . $request->search . '%')
            ->orWhere('masalah', 'like', '%' . $request->search . '%')
            ->orWhere('solusi', 'like', '%' . $request->search . '%')
            ->paginate(6);

        return view('kesiswaan.pelayanan-karir.index', [
            'title' => 'Kesiswaan > Pelayanan Karir',
            'section_service' => SectionService::first(),
            'students' => Student::all(),
            'pelayanan_karir' => $pelayanans,
            'pembinaan_siswa' => PembinaanSiswa::paginate(6),
        ]);
    }

    function detailSection()
    {
        $section_service = SectionService::first();
        return response()->json($section_service);
    }

    function updateSection(Request $request)
    {
        $validatedData = $request->validate([
            'title_section' => 'required|string|max:255',
            'description' => 'required|string',
            'button' => 'required|string|max:255',
        ]);

        $sectionService = SectionService::first()->update($validatedData);

        if ($sectionService) {
            return redirect(route('pelayanan-karir-index'))->with('success', 'Berhasil Update Section Pelayanan Karir!');
        } else {
            return redirect(route('pelayanan-karir-index'))->with('failed', 'Gagal Update Section Pelayanan Karir!');
        }
    }

    function createService()
    {
        return view('kesiswaan.pelayanan-karir.create', [
            'title' => 'Kesiswaan > Pelayanan Karir',
            'students' => Student::all(),
        ]);
    }

    function storeService(Request $request)
    {
        $validatedData = $request->validate([
            'dokumentasi' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'tanggal' => 'required|date',
            'judul' => 'required|string',
            'masalah' => 'required|string',
            'solusi' => 'required|string',
            'students_id' => 'required|string',
        ]);

        if ($validatedData['dokumentasi']) {
            $image = $request->file('dokumentasi');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/kesiswaan-images/pelayanan-karir-image/'), $imageName);
            $validatedData['dokumentasi'] = $imageName;
        }

        $pelayananKarir = PelayananKarir::create($validatedData);

        if ($pelayananKarir) {
            return redirect(route('pelayanan-karir-index'))->with('success', 'Berhasil Tambah Pelayanan Karir Sekolah!');
        } else {
            return redirect(route('pelayanan-karir-store'))->with('failed', 'Gagal Tambah Pelayanan Karir Sekolah!');
        }
    }

    function detailService($id)
    {
        return view('kesiswaan.pelayanan-karir.detail', [
            'title' => 'Kesiswaan > Pelayanan Karir',
            'pelayanan' => PelayananKarir::where('id', $id)->first(),
            'students' => Student::all(),
        ]);
    }

    function editService($id)
    {
        return view('kesiswaan.pelayanan-karir.edit', [
            'title' => 'Kesiswaan > Pelayanan Karir',
            'pelayanan' => PelayananKarir::where('id', $id)->first(),
            'students' => Student::all(),
        ]);
    }

    function updateService($id, Request $request)
    {
        $pelayanan = PelayananKarir::where('id', $id)->first();
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'judul' => 'required|string',
            'masalah' => 'required|string',
            'solusi' => 'required|string',
            'students_id' => 'required|string',
        ]);

        if ($request->file('dokumentasi')) {
            if (file_exists(public_path('assets/img/kesiswaan-images/pelayanan-karir-image/') . $pelayanan->dokumentasi) && $pelayanan->dokumentasi) {
                $oldImagePath = public_path('assets/img/kesiswaan-images/pelayanan-karir-image/') . $pelayanan->dokumentasi;
                unlink($oldImagePath);
            }

            $image = $request->file('dokumentasi');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/kesiswaan-images/pelayanan-karir-image/'), $imageName);
            $validatedData['dokumentasi'] = $imageName;
        } else {
            $validatedData['dokumentasi'] = $pelayanan->dokumentasi;
        }

        $pelayananKarir = PelayananKarir::where('id', $id)->first()->update($validatedData);

        if ($pelayananKarir) {
            return redirect(route('pelayanan-karir-index'))->with('success', 'Berhasil Edit Pelayanan Karir Sekolah!');
        } else {
            return redirect(route('pelayanan-karir-edit'))->with('failed', 'Gagal Edit Pelayanan Karir Sekolah!');
        }
    }

    function deleteService($id)
    {
        $pelayanan = PelayananKarir::where('id', $id)->first();

        if ($pelayanan->dokumentasi) {
            if (file_exists(public_path('assets/img/kesiswaan-images/pelayanan-karir-image/') . $pelayanan->dokumentasi) && $pelayanan->dokumentasi) {
                $imagePath = public_path('assets/img/kesiswaan-images/pelayanan-karir-image/') . $pelayanan->dokumentasi;
                unlink($imagePath);
            }
        }

        $pelayanan = $pelayanan->delete();

        if ($pelayanan) {
            return redirect(route('pelayanan-karir-index'))->with('success', 'Berhasil Hapus Pelayanan Karir Sekolah!');
        } else {
            return redirect(route('pelayanan-karir-index'))->with('failed', 'Gagal Hapus Pelayanan Karir Sekolah!');
        }
    }

    function createDevelopment()
    {
        return view('kesiswaan.pembinaan-siswa.create', [
            'title' => 'Kesiswaan > Pelayanan Karir',
            'students' => Student::all(),
        ]);
    }

    function storeDevelopment(Request $request)
    {
        $validatedData = $request->validate([
            'dokumentasi' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'tanggal' => 'required|date',
            'masalah' => 'required|string',
            'solusi' => 'required|string',
            'students_id' => 'required|string',
        ]);

        if ($validatedData['dokumentasi']) {
            $image = $request->file('dokumentasi');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/kesiswaan-images/pembinaan-siswa-image/'), $imageName);
            $validatedData['dokumentasi'] = $imageName;
        }

        $pembinaanSiswa = PembinaanSiswa::create($validatedData);

        if ($pembinaanSiswa) {
            return redirect(route('pelayanan-karir-index'))->with('success', 'Berhasil Tambah Pembinaan Siswa Sekolah!');
        } else {
            return redirect(route('pelayanan-karir-store'))->with('failed', 'Gagal Tambah Pembinaan Siswa Sekolah!');
        }
    }

    function detailDevelopment($id)
    {
        return view('kesiswaan.pembinaan-siswa.detail', [
            'title' => 'Kesiswaan > Pelayanan Karir',
            'pembinaan' => PembinaanSiswa::where('id', $id)->first(),
            'students' => Student::all(),
        ]);
    }

    function editDevelopment($id)
    {
        return view('kesiswaan.pembinaan-siswa.edit', [
            'title' => 'Kesiswaan > Pelayanan Karir',
            'pembinaan' => PembinaanSiswa::where('id', $id)->first(),
            'students' => Student::all(),
        ]);
    }

    function updateDevelopment($id, Request $request)
    {
        $pembinaan = PembinaanSiswa::where('id', $id)->first();
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'masalah' => 'required|string',
            'solusi' => 'required|string',
            'students_id' => 'required|string',
        ]);

        if ($request->file('dokumentasi')) {
            if (file_exists(public_path('assets/img/kesiswaan-images/pembinaan-siswa-image/') . $pembinaan->dokumentasi) && $pembinaan->dokumentasi) {
                $oldImagePath = public_path('assets/img/kesiswaan-images/pembinaan-siswa-image/') . $pembinaan->dokumentasi;
                unlink($oldImagePath);
            }

            $image = $request->file('dokumentasi');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/kesiswaan-images/pembinaan-siswa-image/'), $imageName);
            $validatedData['dokumentasi'] = $imageName;
        } else {
            $validatedData['dokumentasi'] = $pembinaan->dokumentasi;
        }

        $pembinaanSiswa = PembinaanSiswa::where('id', $id)->first()->update($validatedData);

        if ($pembinaanSiswa) {
            return redirect(route('pelayanan-karir-index'))->with('success', 'Berhasil Edit Pembinaan Siswa Sekolah!');
        } else {
            return redirect(route('pelayanan-karir-edit'))->with('failed', 'Gagal Edit Pembinaan Siswa Sekolah!');
        }
    }

    function deleteDevelopment($id)
    {
        $pembinaan = PembinaanSiswa::where('id', $id)->first();

        if ($pembinaan->dokumentasi) {
            if (file_exists(public_path('assets/img/kesiswaan-images/pembinaan-siswa-image/') . $pembinaan->dokumentasi) && $pembinaan->dokumentasi) {
                $imagePath = public_path('assets/img/kesiswaan-images/pembinaan-siswa-image/') . $pembinaan->dokumentasi;
                unlink($imagePath);
            }
        }

        $pembinaan = $pembinaan->delete();

        if ($pembinaan) {
            return redirect(route('pelayanan-karir-index'))->with('success', 'Berhasil Hapus Pembinaan Siswa Sekolah!');
        } else {
            return redirect(route('pelayanan-karir-index'))->with('failed', 'Gagal Hapus Pembinaan Siswa Sekolah!');
        }
    }
}
