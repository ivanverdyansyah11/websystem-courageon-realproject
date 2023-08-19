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
            'title' => 'Sarana',
            'section' => SectionDenah::first(),
            'rooms' => Denah::all(),
        ]);
    }

    function detailSection()
    {
        $section_denah = SectionDenah::first();
        return response()->json($section_denah);
    }

    function updateSection(Request $request)
    {
        $validatedData = $request->validate([
            'title_section' => 'required|string|max:255',
            'title_code' => 'required|string|max:255',
            'title_room' => 'required|string|max:255',
            'button' => 'required|string|max:255',
        ]);

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
            'icon' => 'required|image|max:2048',
            'name' => 'required|string|max:255',
            'link' => 'required|string|max:255',
        ]);

        if ($request->file('icon')) {
            $oldImagePath = public_path('assets/img/profil-images/kontak-image/') . $request->oldImage;
            unlink($oldImagePath);

            $image = $request->file('icon');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/profil-images/kontak-image/'), $imageName);
            $validatedData['icon'] = $imageName;
        } else {
            $validatedData['icon'] = $request->oldImage;
        }

        $contact = Contact::where('id', $id)->first()->update($validatedData);

        if ($contact) {
            return redirect(route('kontak-index'))->with('success', 'Berhasil Edit Kontak Sekolah!');
        } else {
            return redirect(route('kontak-index'))->with('failed', 'Gagal Edit Kontak Sekolah!');
        }
    }

    function deleteRoom($id)
    {
        $contact = Contact::where('id', $id)->first();

        if ($contact->icon) {
            $imagePath = public_path('assets/img/profil-images/kontak-image/') . $contact->icon;
            unlink($imagePath);
        }

        $contact = $contact->delete();

        if ($contact) {
            return redirect(route('kontak-index'))->with('success', 'Berhasil Hapus Kontak Sekolah!');
        } else {
            return redirect(route('kontak-index'))->with('failed', 'Gagal Hapus Kontak Sekolah!');
        }
    }
}
