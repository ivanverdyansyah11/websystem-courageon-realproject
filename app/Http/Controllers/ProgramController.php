<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\SectionProgram;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    function index()
    {
        return view('akademik.program.index', [
            'title' => 'Program',
            'section_program' => SectionProgram::first(),
            'programs' => Program::all(),
        ]);
    }

    function detailSection()
    {
        $section_curriculum = SectionProgram::first();
        return response()->json($section_curriculum);
    }

    function updateSection(Request $request)
    {
        $validatedData = $request->validate([
            'title_section' => 'required|string|max:255',
        ]);

        $sectionProgram = SectionProgram::first()->update($validatedData);

        if ($sectionProgram) {
            return redirect(route('program-index'))->with('success', 'Berhasil Update Section Program!');
        } else {
            return redirect(route('program-index'))->with('failed', 'Gagal Update Section Program!');
        }
    }

    function storeProgram(Request $request)
    {
        $validatedData = $request->validate([
            'banner' => 'required|image|mimes:jpeg,png,jpg|max:2048',
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

    function detailProgram($id)
    {
        $program = Program::where('id', $id)->first();
        return response()->json($program);
    }

    function updateProgram($id, Request $request)
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

    function deleteProgram($id)
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
