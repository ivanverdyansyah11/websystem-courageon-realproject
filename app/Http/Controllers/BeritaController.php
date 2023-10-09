<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\SectionBerita;
use Illuminate\Http\Request;

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
}
