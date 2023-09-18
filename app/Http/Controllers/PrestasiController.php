<?php

namespace App\Http\Controllers;

use App\Models\KategoriPrestasi;
use App\Models\Kelas;
use App\Models\Prestasi;
use App\Models\SectionAchievement;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    function index()
    {
        return view('kesiswaan.prestasi.index', [
            'title' => 'Kesiswaan > Prestasi',
            'section_achievement' => SectionAchievement::first(),
            'allPrestasi' => Prestasi::paginate(6),
        ]);
    }

    function detailSection()
    {
        $section_achievement = SectionAchievement::first();
        return response()->json($section_achievement);
    }

    function updateSection(Request $request)
    {
        $validatedData = $request->validate([
            'title_section' => 'required|string|max:255',
            'button' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $sectionAchievement = SectionAchievement::first()->update($validatedData);

        if ($sectionAchievement) {
            return redirect(route('prestasi-index'))->with('success', 'Berhasil Update Section Prestasi!');
        } else {
            return redirect(route('prestasi-index'))->with('failed', 'Gagal Update Section Prestasi!');
        }
    }

    function createAchievement()
    {
        return view('kesiswaan.prestasi.create', [
            'title' => 'Kesiswaan > Prestasi',
            'categories' => KategoriPrestasi::all(),
        ]);
    }

    function storeAchievement(Request $request)
    {
        if ($request->kategori_prestasis_id == '-' || $request->status == '-' || $request->tingkat == '-') {
            return redirect(route('prestasi-create'))->with('failed', 'Isi Form Kategori Prestasi, Status dan Tingkat Terlebih Dahulu!');
        }

        $validatedData = $request->validate([
            'dokumentasi' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'tanggal' => 'required|date',
            'status' => 'required|string|max:255',
            'nama_kegiatan' => 'required|string|max:255',
            'penyelenggara' => 'required|string|max:255',
            'nama_peserta' => 'required|string|max:255',
            'hasil' => 'required|string|max:255',
            'tingkat' => 'required|string|max:255',
            'pembina' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kategori_prestasis_id' => 'required',
        ]);

        if ($validatedData['dokumentasi']) {
            $image = $request->file('dokumentasi');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/kesiswaan-images/prestasi-image/'), $imageName);
            $validatedData['dokumentasi'] = $imageName;
        }

        $prestasi = Prestasi::create($validatedData);

        if ($prestasi) {
            return redirect(route('prestasi-index'))->with('success', 'Berhasil Tambah Prestasi Sekolah!');
        } else {
            return redirect(route('prestasi-index'))->with('failed', 'Gagal Tambah Prestasi Sekolah!');
        }
    }

    function detailAchievement($id)
    {
        return view('kesiswaan.prestasi.detail', [
            'title' => 'Kesiswaan > Prestasi',
            'prestasi' => Prestasi::where('id', $id)->first(),
            'categories' => KategoriPrestasi::all(),
        ]);
    }

    function editAchievement($id)
    {
        return view('kesiswaan.prestasi.edit', [
            'title' => 'Kesiswaan > Prestasi',
            'prestasi' => Prestasi::where('id', $id)->first(),
            'categories' => KategoriPrestasi::all(),
        ]);
    }

    function updateAchievement($id, Request $request)
    {
        if ($request->kategori_prestasis_id == '-' || $request->status == '-' || $request->tingkat == '-') {
            return redirect(route('prestasi-edit', $id))->with('failed', 'Isi Form Kategori Prestasi, Status dan Tingkat Terlebih Dahulu!');
        }

        $achievement = Prestasi::where('id', $id)->first();
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'status' => 'required|string|max:255',
            'nama_kegiatan' => 'required|string|max:255',
            'penyelenggara' => 'required|string|max:255',
            'nama_peserta' => 'required|string|max:255',
            'hasil' => 'required|string|max:255',
            'tingkat' => 'required|string|max:255',
            'pembina' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kategori_prestasis_id' => 'required',
        ]);

        if ($request->file('dokumentasi')) {
            $oldImagePath = public_path('assets/img/kesiswaan-images/prestasi-image/') . $achievement['dokumentasi'];
            unlink($oldImagePath);

            $image = $request->file('dokumentasi');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/kesiswaan-images/prestasi-image/'), $imageName);
            $validatedData['dokumentasi'] = $imageName;
        } else {
            $validatedData['dokumentasi'] = $achievement['dokumentasi'];
        }

        $prestasi = Prestasi::where('id', $id)->first()->update($validatedData);

        if ($prestasi) {
            return redirect(route('prestasi-index'))->with('success', 'Berhasil Edit Prestasi Sekolah!');
        } else {
            return redirect(route('prestasi-index'))->with('failed', 'Gagal Edit Prestasi Sekolah!');
        }
    }

    function deleteAchievement($id)
    {
        $prestasi = Prestasi::where('id', $id)->first();

        if ($prestasi->dokumentasi) {
            $imagePath = public_path('assets/img/kesiswaan-images/prestasi-image/') . $prestasi->dokumentasi;
            unlink($imagePath);
        }

        $prestasi = $prestasi->delete();

        if ($prestasi) {
            return redirect(route('prestasi-index'))->with('success', 'Berhasil Hapus Prestasi Sekolah!');
        } else {
            return redirect(route('prestasi-index'))->with('failed', 'Gagal Hapus Prestasi Sekolah!');
        }
    }
}
