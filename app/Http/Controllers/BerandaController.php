<?php

namespace App\Http\Controllers;

use App\Models\HeaderHome;
use App\Models\OpeningHome;
use App\Models\RemarkHome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BerandaController extends Controller
{
    function index()
    {
        return view('beranda.index', [
            'title' => 'Beranda',
            'section_header' => HeaderHome::first(),
            'section_opening' => OpeningHome::first(),
            'section_remark' => RemarkHome::first(),
        ]);
    }

    function editHeader()
    {
        $section_header = HeaderHome::first();
        return response()->json($section_header);
    }

    function updateHeader(Request $request)
    {
        $validatedData = $request->validate([
            // 'banner' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'title_header' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        if ($request->file('banner')) {
            Storage::delete($request->oldImage);
            $validatedData['banner'] = $request->file('banner')->store('beranda-images/header-image');
        } else {
            $validatedData['banner'] = $request->oldImage;
        }

        $headerHome = HeaderHome::first()->update($validatedData);

        if ($headerHome) {
            return redirect(route('beranda-index'))->with('success', 'Berhasil Update Section Header!');
        } else {
            return redirect(route('beranda-index'))->with('failed', 'Gagal Update Section Header!');
        }
    }

    function editOpening()
    {
        $section_opening = OpeningHome::first();
        return response()->json($section_opening);
    }

    function updateOpening(Request $request)
    {
        $validatedData = $request->validate([
            'title_opening' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $openingHome = OpeningHome::first()->update($validatedData);

        if ($openingHome) {
            return redirect(route('beranda-index'))->with('success', 'Berhasil Update Section Pembuka!');
        } else {
            return redirect(route('beranda-index'))->with('failed', 'Gagal Update Section Pembuka!');
        }
    }

    function editRemark()
    {
        $section_remark = RemarkHome::first();
        return response()->json($section_remark);
    }

    function updateRemark(Request $request)
    {
        $validatedData = $request->validate([
            // 'banner' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'title_remark' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        if ($request->file('banner')) {
            Storage::delete($request->oldImage);
            $validatedData['banner'] = $request->file('banner')->store('beranda-images/sambutan-image');
        } else {
            $validatedData['banner'] = $request->oldImage;
        }

        $remarkHome = RemarkHome::first()->update($validatedData);

        if ($remarkHome) {
            return redirect(route('beranda-index'))->with('success', 'Berhasil Update Section Sambutan!');
        } else {
            return redirect(route('beranda-index'))->with('failed', 'Gagal Update Section Pembuka!');
        }
    }
}
