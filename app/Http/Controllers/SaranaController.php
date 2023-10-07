<?php

namespace App\Http\Controllers;

use App\Models\HeaderSaranaPrasarana;
use Illuminate\Http\Request;

class SaranaController extends Controller
{
    function index()
    {
        return view('sarana.index', [
            'title' => 'Sarana Prasarana',
            'section_header' => HeaderSaranaPrasarana::first(),
        ]);
    }

    function detailHeader()
    {
        $section_sarana = HeaderSaranaPrasarana::first();
        return response()->json($section_sarana);
    }

    function updateHeader(Request $request)
    {
        $validatedData = $request->validate([
            'title_header' => 'required|string|max:255',
            'description' => 'required|string',
            'button' => 'required|string|max:255',
        ]);

        if ($request->file('banner')) {
            if (public_path('assets/img/sarana-prasarana-images/header-image/') . $request->oldImage && $request->oldImage) {
                $oldImagePath = public_path('assets/img/sarana-prasarana-images/header-image/') . $request->oldImage;
                unlink($oldImagePath);
            }

            $image = $request->file('banner');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/sarana-prasarana-images/header-image/'), $imageName);
            $validatedData['banner'] = $imageName;
        } else {
            $validatedData['banner'] = $request->oldImage;
        }

        $headerSarana = HeaderSaranaPrasarana::first()->update($validatedData);

        if ($headerSarana) {
            return redirect(route('sarana-index'))->with('success', 'Berhasil Update Section Header!');
        } else {
            return redirect(route('sarana-index'))->with('failed', 'Gagal Update Section Header!');
        }
    }
}
