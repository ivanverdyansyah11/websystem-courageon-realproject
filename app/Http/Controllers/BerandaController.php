<?php

namespace App\Http\Controllers;

use App\Models\HeaderHome;
use App\Models\HistoryHome;
use App\Models\Logo;
use App\Models\Navigasi;
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
            'section_history' => HistoryHome::first(),
            'navigasi' => Navigasi::first(),
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
            'title_header' => 'required|string|max:255',
            'description' => 'required|string',
            'button' => 'required|string|max:255',
        ]);

        if ($request->file('banner')) {
            if (file_exists(public_path('assets/img/beranda-images/header-image/') . $request->oldImage) && $request->oldImage) {
                $oldImagePath = public_path('assets/img/beranda-images/header-image/') . $request->oldImage;
                unlink($oldImagePath);
            }

            $image = $request->file('banner');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/beranda-images/header-image/'), $imageName);
            $validatedData['banner'] = $imageName;
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
            'title_remark' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        if ($request->file('banner')) {
            if (file_exists(public_path('assets/img/beranda-images/sambutan-image/') . $request->oldImage) && $request->oldImage) {
                $oldImagePath = public_path('assets/img/beranda-images/sambutan-image/') . $request->oldImage;
                unlink($oldImagePath);
            }

            $image = $request->file('banner');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/beranda-images/sambutan-image/'), $imageName);
            $validatedData['banner'] = $imageName;
        } else {
            $validatedData['banner'] = $request->oldImage;
        }

        $remarkHome = RemarkHome::first()->update($validatedData);

        if ($remarkHome) {
            return redirect(route('beranda-index'))->with('success', 'Berhasil Update Section Sambutan!');
        } else {
            return redirect(route('beranda-index'))->with('failed', 'Gagal Update Section Sambutan!');
        }
    }

    function editHistory()
    {
        $section_history = HistoryHome::first();
        return response()->json($section_history);
    }

    function updateHistory(Request $request)
    {
        $validatedData = $request->validate([
            'title_history' => 'required|string|max:255',
            'description' => 'required|string',
            'button' => 'required|string|max:255',
        ]);

        if ($request->file('banner')) {
            if (file_exists(public_path('assets/img/beranda-images/sejarah-image/') . $request->oldImage) && $request->oldImage) {
                $oldImagePath = public_path('assets/img/beranda-images/sejarah-image/') . $request->oldImage;
                unlink($oldImagePath);
            }

            $image = $request->file('banner');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/beranda-images/sejarah-image/'), $imageName);
            $validatedData['banner'] = $imageName;
        } else {
            $validatedData['banner'] = $request->oldImage;
        }

        $historyHome = HistoryHome::first()->update($validatedData);

        if ($historyHome) {
            return redirect(route('beranda-index'))->with('success', 'Berhasil Update Section Sejarah!');
        } else {
            return redirect(route('beranda-index'))->with('failed', 'Gagal Update Section Sejarah!');
        }
    }

    function editNavigasi()
    {
        $navigasi = Navigasi::first();
        return response()->json($navigasi);
    }

    function updateNavigasi(Request $request)
    {
        $validatedData = $request->validate([
            'link_1' => 'required|string|max:255',
            'link_2' => 'required|string|max:255',
            'link_3' => 'required|string|max:255',
            'link_4' => 'required|string|max:255',
            'link_5' => 'required|string|max:255',
            'link_6' => 'required|string|max:255',
        ]);

        $navigasi = Navigasi::first()->update($validatedData);

        if ($navigasi) {
            return redirect(route('beranda-index'))->with('success', 'Berhasil Update Navigasi!');
        } else {
            return redirect(route('beranda-index'))->with('failed', 'Gagal Update Navigasi!');
        }
    }
}
