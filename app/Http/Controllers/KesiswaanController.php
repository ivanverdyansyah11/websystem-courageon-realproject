<?php

namespace App\Http\Controllers;

use App\Models\HeaderStudent;
use Illuminate\Http\Request;

class KesiswaanController extends Controller
{
    function index()
    {
        return view('kesiswaan.index', [
            'title' => 'Kesiswaan',
            'section_header' => HeaderStudent::first(),
        ]);
    }

    function detailHeader()
    {
        $section_student = HeaderStudent::first();
        return response()->json($section_student);
    }

    function updateHeader(Request $request)
    {
        $validatedData = $request->validate([
            'title_header' => 'required|string|max:255',
            'description' => 'required|string',
            'button' => 'required|string|max:255',
        ]);

        if ($request->file('banner')) {
            if (public_path('assets/img/kesiswaan-images/header-image/') . $request->oldImage && $request->oldImage) {
                $oldImagePath = public_path('assets/img/kesiswaan-images/header-image/') . $request->oldImage;
                unlink($oldImagePath);
            }

            $image = $request->file('banner');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/kesiswaan-images/header-image/'), $imageName);
            $validatedData['banner'] = $imageName;
        } else {
            $validatedData['banner'] = $request->oldImage;
        }

        $headerStudent = HeaderStudent::first()->update($validatedData);

        if ($headerStudent) {
            return redirect(route('kesiswaan-index'))->with('success', 'Berhasil Update Section Header!');
        } else {
            return redirect(route('kesiswaan-index'))->with('failed', 'Gagal Update Section Header!');
        }
    }
}
