<?php

namespace App\Http\Controllers;

use App\Models\HeaderAcademic;
use Illuminate\Http\Request;

class AkademikController extends Controller
{
    function index()
    {
        return view('akademik.index', [
            'title' => 'Akademik',
            'section_header' => HeaderAcademic::first(),
        ]);
    }

    function detailHeader()
    {
        $section_academic = HeaderAcademic::first();
        return response()->json($section_academic);
    }

    function updateHeader(Request $request)
    {
        $validatedData = $request->validate([
            'title_header' => 'required|string|max:255',
            'description' => 'required|string',
            'button' => 'required|string|max:255',
        ]);

        if ($request->file('banner')) {
            $oldImagePath = public_path('assets/img/akademik-images/header-image/') . $request->oldImage;
            unlink($oldImagePath);

            $image = $request->file('banner');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/akademik-images/header-image/'), $imageName);
            $validatedData['banner'] = $imageName;
        } else {
            $validatedData['banner'] = $request->oldImage;
        }

        $headerAcademic = HeaderAcademic::first()->update($validatedData);

        if ($headerAcademic) {
            return redirect(route('akademik-index'))->with('success', 'Berhasil Update Section Header!');
        } else {
            return redirect(route('akademik-index'))->with('failed', 'Gagal Update Section Header!');
        }
    }
}
