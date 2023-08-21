<?php

namespace App\Http\Controllers;

use App\Models\Denah;
use App\Models\SectionDenah;
use Illuminate\Http\Request;

class DenahController extends Controller
{
    function index()
    {
        return view('sarana.denah.index', [
            'title' => 'Sarana Prasarana > Denah',
            'section' => SectionDenah::first(),
            'rooms' => Denah::paginate(6),
        ]);
    }

    function detailSection()
    {
        $section_denah = SectionDenah::first();
        return response()->json($section_denah);
    }

    function updateSection(Request $request)
    {
        $denah = SectionDenah::first();
        $validatedData = $request->validate([
            'title_section' => 'required|string|max:255',
            'title_code' => 'required|string|max:255',
            'title_room' => 'required|string|max:255',
            'button' => 'required|string|max:255',
        ]);

        if ($request->file('map')) {
            $oldImagePath = public_path('assets/img/sarana-prasarana-images/denah-image/') . $denah['map'];
            unlink($oldImagePath);

            $image = $request->file('map');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/sarana-prasarana-images/denah-image/'), $imageName);
            $validatedData['map'] = $imageName;
        } else {
            $validatedData['map'] = $denah['map'];
        }

        $sectionDenah = SectionDenah::first()->update($validatedData);

        if ($sectionDenah) {
            return redirect(route('denah-index'))->with('success', 'Berhasil Update Section Denah!');
        } else {
            return redirect(route('denah-index'))->with('failed', 'Gagal Update Section Denah!');
        }
    }

    function storeRoom(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $denah = Denah::create($validatedData);

        if ($denah) {
            return redirect(route('denah-index'))->with('success', 'Berhasil Tambah Ruangan Denah Sekolah!');
        } else {
            return redirect(route('denah-index'))->with('failed', 'Gagal Tambah Ruangan Denah Sekolah!');
        }
    }

    function detailRoom($id)
    {
        $denah = Denah::where('id', $id)->first();
        return response()->json($denah);
    }

    function updateRoom($id, Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $denah = Denah::where('id', $id)->first()->update($validatedData);

        if ($denah) {
            return redirect(route('denah-index'))->with('success', 'Berhasil Edit Ruangan Denah Sekolah!');
        } else {
            return redirect(route('denah-index'))->with('failed', 'Gagal Edit Ruangan Denah Sekolah!');
        }
    }

    function deleteRoom($id)
    {
        $denah = Denah::where('id', $id)->first();
        $denah = $denah->delete();

        if ($denah) {
            return redirect(route('denah-index'))->with('success', 'Berhasil Hapus Ruangan Denah Sekolah!');
        } else {
            return redirect(route('denah-index'))->with('failed', 'Gagal Hapus Ruangan Denah Sekolah!');
        }
    }
}
