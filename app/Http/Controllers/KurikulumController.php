<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use Illuminate\Http\Request;

class KurikulumController extends Controller
{
    function index()
    {
        return view('akademik.kurikulum.index', [
            'title' => 'Akademik > Kurikulum',
            'section_section' => Curriculum::first(),
        ]);
    }

    function detailSection()
    {
        $section_curriculum = Curriculum::first();
        return response()->json($section_curriculum);
    }

    function updateSection(Request $request)
    {
        $validatedData = $request->validate([
            'title_section' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        if ($request->file('banner')) {
            $oldImagePath = public_path('assets/img/akademik-images/kurikulum-image/') . $request->oldImage;
            unlink($oldImagePath);

            $image = $request->file('banner');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/akademik-images/kurikulum-image/'), $imageName);
            $validatedData['banner'] = $imageName;
        } else {
            $validatedData['banner'] = $request->oldImage;
        }

        $curriculum = Curriculum::first()->update($validatedData);

        if ($curriculum) {
            return redirect(route('kurikulum-index'))->with('success', 'Berhasil Update Section Kurikulum!');
        } else {
            return redirect(route('kurikulum-index'))->with('failed', 'Gagal Update Section Kurikulum!');
        }
    }
}
