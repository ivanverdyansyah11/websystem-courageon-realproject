<?php

namespace App\Http\Controllers;

use App\Exports\BeritaExport;
use App\Models\Berita;
use App\Models\SectionBerita;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class BeritaController extends Controller
{
    function index()
    {
        return view('humas.berita.index', [
            'title' => 'Humas > Berita',
            'section_header' => SectionBerita::first(),
            'beritas' => Berita::paginate(6),
        ]);
    }

    public function search(Request $request)
    {
        $beritas = Berita::where('title', 'like', '%' . $request->search . '%')
            ->orWhere('author', 'like', '%' . $request->search . '%')
            ->orWhere('description', 'like', '%' . $request->search . '%')
            ->orWhere('created_at', 'like', '%' . $request->search . '%')
            ->paginate(6);

        return view('humas.berita.index', [
            'title' => 'Humas > Berita',
            'section_header' => SectionBerita::first(),
            'beritas' => $beritas,
        ]);
    }

    public function generate()
    {
        return Excel::download(new BeritaExport, 'data-berita.xlsx');
    }

    function detailHeader()
    {
        $sectionBerita = SectionBerita::first();
        return response()->json($sectionBerita);
    }

    function updateHeader(Request $request)
    {
        $validatedData = $request->validate([
            'title_header' => 'required|string|max:255',
            'button' => 'required|string|max:255',
        ]);

        $sectionBerita = SectionBerita::first()->update($validatedData);

        if ($sectionBerita) {
            return redirect(route('berita-index'))->with('success', 'Berhasil Update Section Header!');
        } else {
            return redirect(route('berita-index'))->with('failed', 'Gagal Update Section Header!');
        }
    }

    function detailBerita($id)
    {
        return view('humas.berita.detail', [
            'title' => 'Humas > Berita',
            'berita' => Berita::where('id', $id)->first(),
        ]);
    }

    function createBerita()
    {
        return view('humas.berita.add', [
            'title' => 'Humas > Berita',
        ]);
    }

    function storeBerita(Request $request)
    {
        $validatedData = $request->validate([
            'banner' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required|string|max:255',
            'author' => 'required|string',
            'created_date' => 'required|date',
            'description' => 'required|string',
        ]);

        if ($validatedData['banner']) {
            $image = $request->file('banner');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/humas-images/berita-image/'), $imageName);
            $validatedData['banner'] = $imageName;
        }

        $berita = Berita::create($validatedData);

        if ($berita) {
            return redirect(route('berita-index'))->with('success', 'Berhasil Tambah Berita Sekolah!');
        } else {
            return redirect(route('berita-index'))->with('failed', 'Gagal Tambah Berita Sekolah!');
        }
    }

    function editBerita($id)
    {
        return view('humas.berita.edit', [
            'title' => 'Humas > Berita',
            'berita' => Berita::where('id', $id)->first(),
        ]);
    }

    function updateBerita($id, Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string',
            'created_date' => 'required|date',
            'description' => 'required|string',
        ]);

        if ($request->file('banner')) {
            if (file_exists(public_path('assets/img/humas-images/berita-image/') . $request->oldImage) && $request->oldImage) {
                $oldImagePath = public_path('assets/img/humas-images/berita-image/') . $request->oldImage;
                unlink($oldImagePath);
            }

            $image = $request->file('banner');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/humas-images/berita-image/'), $imageName);
            $validatedData['banner'] = $imageName;
        } else {
            $validatedData['banner'] = $request->oldImage;
        }

        $berita = Berita::where('id', $id)->first()->update($validatedData);

        if ($berita) {
            return redirect(route('berita-index'))->with('success', 'Berhasil Edit Berita Sekolah!');
        } else {
            return redirect(route('berita-index'))->with('failed', 'Gagal Edit Berita Sekolah!');
        }
    }

    function deleteBerita($id)
    {
        $berita = Berita::where('id', $id)->first();

        if ($berita->banner) {
            if (file_exists(public_path('assets/img/humas-images/berita-image/') . $berita->banner) && $berita->banner) {
                $imagePath = public_path('assets/img/humas-images/berita-image/') . $berita->banner;
                unlink($imagePath);
            }
        }

        $berita = $berita->delete();

        if ($berita) {
            return redirect(route('berita-index'))->with('success', 'Berhasil Hapus Berita Sekolah!');
        } else {
            return redirect(route('berita-index'))->with('failed', 'Gagal Hapus Berita Sekolah!');
        }
    }
}
