<?php

namespace App\Http\Controllers;

use App\Models\HeaderHumas;
use Illuminate\Http\Request;

class HumasController extends Controller
{
    function index()
    {
        return view('humas.index', [
            'title' => 'Humas',
            'section_headers' => HeaderHumas::paginate(6),
        ]);
    }

    function detailHeader($id)
    {
        $section_header = HeaderHumas::where('id', $id)->first();
        return response()->json($section_header);
    }

    function storeHeader(Request $request)
    {
        $validatedData = $request->validate([
            'banner' => 'required|image|mimes:jpeg,png,jpg',
            'title_header' => 'required|string|max:255',
            'description' => 'required|string',
            'button' => 'required|string|max:255',
        ]);

        if ($request->file('banner')) {
            $image = $request->file('banner');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/humas-images/header-image/'), $imageName);
            $validatedData['banner'] = $imageName;
        }

        $headerHome = HeaderHumas::create($validatedData);

        if ($headerHome) {
            return redirect(route('humas-index'))->with('success', 'Berhasil Tambah Section Header!');
        } else {
            return redirect(route('humas-index'))->with('failed', 'Gagal Tambah Section Header!');
        }
    }

    function updateHeader($id, Request $request)
    {
        $validatedData = $request->validate([
            'title_header' => 'required|string|max:255',
            'description' => 'required|string',
            'button' => 'required|string|max:255',
        ]);

        if ($request->file('banner')) {
            if (file_exists(public_path('assets/img/humas-images/header-image/') . $request->oldImage) && $request->oldImage) {
                $oldImagePath = public_path('assets/img/humas-images/header-image/') . $request->oldImage;
                unlink($oldImagePath);
            }

            $image = $request->file('banner');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/humas-images/header-image/'), $imageName);
            $validatedData['banner'] = $imageName;
        } else {
            $validatedData['banner'] = $request->oldImage;
        }

        $headerHome = HeaderHumas::where('id', $id)->first()->update($validatedData);

        if ($headerHome) {
            return redirect(route('humas-index'))->with('success', 'Berhasil Update Section Header!');
        } else {
            return redirect(route('humas-index'))->with('failed', 'Gagal Update Section Header!');
        }
    }

    function deleteHeader($id)
    {
        $headerHome = HeaderHumas::where('id', $id)->first();

        if ($headerHome->banner) {
            if (file_exists(public_path('assets/img/humas-images/header-image/') . $headerHome->banner) && $headerHome->banner) {
                $imagePath = public_path('assets/img/humas-images/header-image/') . $headerHome->banner;
                unlink($imagePath);
            }
        }

        $headerHome = $headerHome->delete();

        if ($headerHome) {
            return redirect(route('humas-index'))->with('success', 'Berhasil Hapus Section Header!');
        } else {
            return redirect(route('humas-index'))->with('failed', 'Gagal Hapus Section Header!');
        }
    }
}
