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
            'title' => 'Akademik > Program',
            'section_program' => SectionProgram::first(),
            'programs' => Program::paginate(6),
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
            'title' => 'required|string|max:255',
            'button' => 'required|string|max:255',
            'link' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        if ($validatedData['banner']) {
            $image = $request->file('banner');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/akademik-images/program-image/'), $imageName);
            $validatedData['banner'] = $imageName;
        }

        $program = Program::create($validatedData);

        if ($program) {
            return redirect(route('program-index'))->with('success', 'Berhasil Tambah Program Sekolah!');
        } else {
            return redirect(route('program-index'))->with('failed', 'Gagal Tambah Program Sekolah!');
        }
    }

    function detailProgram($id)
    {
        return view('akademik.program.detail', [
            'title' => 'Akademik > Program',
            'program' => Program::where('id', $id)->first(),
        ]);
    }

    function editProgram($id)
    {
        return view('akademik.program.edit', [
            'title' => 'Akademik > Program',
            'program' => Program::where('id', $id)->first(),
        ]);
    }

    function updateProgram($id, Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'button' => 'required|string|max:255',
            'link' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        if ($request->file('banner')) {
            $oldImagePath = public_path('assets/img/akademik-images/program-image/') . $request->oldImage;
            unlink($oldImagePath);

            $image = $request->file('banner');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/akademik-images/program-image/'), $imageName);
            $validatedData['banner'] = $imageName;
        } else {
            $validatedData['banner'] = $request->oldImage;
        }

        $program = Program::where('id', $id)->first()->update($validatedData);

        if ($program) {
            return redirect(route('program-index'))->with('success', 'Berhasil Edit Program Sekolah!');
        } else {
            return redirect(route('program-index'))->with('failed', 'Gagal Edit Program Sekolah!');
        }
    }

    function deleteProgram($id)
    {
        $program = Program::where('id', $id)->first();

        if ($program->banner) {
            $imagePath = public_path('assets/img/akademik-images/program-image/') . $program->banner;
            unlink($imagePath);
        }

        $program = $program->delete();

        if ($program) {
            return redirect(route('program-index'))->with('success', 'Berhasil Hapus Program Sekolah!');
        } else {
            return redirect(route('program-index'))->with('failed', 'Gagal Hapus Program Sekolah!');
        }
    }
}
