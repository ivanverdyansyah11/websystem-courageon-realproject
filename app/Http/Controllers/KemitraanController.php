<?php

namespace App\Http\Controllers;

use App\Models\SectionKemitraan;
use Illuminate\Http\Request;

class KemitraanController extends Controller
{
    function index()
    {
        return view('humas.kemitraan.index', [
            'title' => 'Humas > Kemitraan',
            'section_header' => SectionKemitraan::first(),
        ]);
    }

    function detailHeader()
    {
        $section_kemitraan = SectionKemitraan::first();
        return response()->json($section_kemitraan);
    }

    function updateHeader(Request $request)
    {
        $validatedData = $request->validate([
            'title_header' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $section_kemitraan = SectionKemitraan::first()->update($validatedData);

        if ($section_kemitraan) {
            return redirect(route('kemitraan-index'))->with('success', 'Berhasil Update Section Header!');
        } else {
            return redirect(route('kemitraan-index'))->with('failed', 'Gagal Update Section Header!');
        }
    }

    function storeContact(Request $request)
    {
        $validatedData = $request->validate([
            'icon' => 'required|image|max:2048',
            'name' => 'required|string|max:255',
            'link' => 'required|string|max:255',
        ]);

        if ($validatedData['icon']) {
            $image = $request->file('icon');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/profil-images/kontak-image/'), $imageName);
            $validatedData['icon'] = $imageName;
        }

        $contact = Contact::create($validatedData);

        if ($contact) {
            return redirect(route('kontak-index'))->with('success', 'Berhasil Tambah Kontak Sekolah!');
        } else {
            return redirect(route('kontak-index'))->with('failed', 'Gagal Tambah Kontak Sekolah!');
        }
    }

    function detailContact($id)
    {
        $contact = Contact::where('id', $id)->first();
        return response()->json($contact);
    }

    function updateContact($id, Request $request)
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

    function deleteContact($id)
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