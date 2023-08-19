<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use App\Models\SectionJournal;
use Illuminate\Http\Request;

class MajalahController extends Controller
{
    function index()
    {
        return view('humas.majalah.index', [
            'title' => 'Humas > Majalah',
            'section_header' => SectionJournal::first(),
            // 'journals' => Journal::all(),
        ]);
    }

    function detailHeader()
    {
        $section_journal = SectionJournal::first();
        return response()->json($section_journal);
    }

    function updateHeader(Request $request)
    {
        $validatedData = $request->validate([
            'title_header' => 'required|string|max:255',
            'button' => 'required|string|max:255',
        ]);

        $section_journal = SectionJournal::first()->update($validatedData);

        if ($section_journal) {
            return redirect(route('majalah-index'))->with('success', 'Berhasil Update Section Header!');
        } else {
            return redirect(route('majalah-index'))->with('failed', 'Gagal Update Section Header!');
        }
    }

    function storePartnership(Request $request)
    {
        $validatedData = $request->validate([
            'logo' => 'required|image|max:2048',
            'name' => 'required|string|max:255',
        ]);

        if ($validatedData['logo']) {
            $image = $request->file('logo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/humas-images/kemitraan-image/'), $imageName);
            $validatedData['logo'] = $imageName;
        }

        $partnership = Partnership::create($validatedData);

        if ($partnership) {
            return redirect(route('kemitraan-index'))->with('success', 'Berhasil Tambah Kemitraan Sekolah!');
        } else {
            return redirect(route('kemitraan-index'))->with('failed', 'Gagal Tambah Kemitraan Sekolah!');
        }
    }

    function detailPartnership($id)
    {
        $partnership = Partnership::where('id', $id)->first();
        return response()->json($partnership);
    }

    function updatePartnership($id, Request $request)
    {
        $validatedData = $request->validate([
            'logo' => 'required|image|max:2048',
            'name' => 'required|string|max:255',
        ]);

        if ($request->file('logo')) {
            $oldImagePath = public_path('assets/img/humas-images/kemitraan-image/') . $request->oldImage;
            unlink($oldImagePath);

            $image = $request->file('logo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/humas-images/kemitraan-image/'), $imageName);
            $validatedData['logo'] = $imageName;
        } else {
            $validatedData['logo'] = $request->oldImage;
        }

        $partnership = Partnership::where('id', $id)->first()->update($validatedData);

        if ($partnership) {
            return redirect(route('kemitraan-index'))->with('success', 'Berhasil Edit Kemitraan Sekolah!');
        } else {
            return redirect(route('kemitraan-index'))->with('failed', 'Gagal Edit Kemitraan Sekolah!');
        }
    }

    function deletePartnership($id)
    {
        $partnership = Partnership::where('id', $id)->first();

        if ($partnership->logo) {
            $imagePath = public_path('assets/img/humas-images/kemitraan-image/') . $partnership->logo;
            unlink($imagePath);
        }

        $partnership = $partnership->delete();

        if ($partnership) {
            return redirect(route('kemitraan-index'))->with('success', 'Berhasil Hapus Kemitraan Sekolah!');
        } else {
            return redirect(route('kemitraan-index'))->with('failed', 'Gagal Hapus Kemitraan Sekolah!');
        }
    }
}
