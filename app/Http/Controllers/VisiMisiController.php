<?php

namespace App\Http\Controllers;

use App\Models\Motto;
use App\Models\VisionMission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VisiMisiController extends Controller
{
    function index()
    {
        return view('profil.visi-misi.index', [
            'title' => 'Profil > Visi & Misi',
            'vision_mission' => VisionMission::first(),
            'motto' => Motto::first(),
        ]);
    }

    function detailVisionMission()
    {
        return view('profil.visi-misi.detail', [
            'title' => 'Profil > Visi & Misi',
            'vision_mission' => VisionMission::first(),
        ]);
    }

    function editVisionMission()
    {
        return view('profil.visi-misi.edit', [
            'title' => 'Profil > Visi & Misi',
            'vision_mission' => VisionMission::first(),
        ]);
    }

    function updateVisionMission(Request $request)
    {
        $validatedData = $request->validate([
            'title_vision' => 'required|string|max:255',
            'description_vision' => 'required|string',
            'title_mission' => 'required|string|max:255',
            'description_mission' => 'required|string',
        ]);

        if (!$request->file('banner')) {
            $validatedData['banner'] = $request->oldImage;
        } else {
            if (file_exists(public_path('assets/img/profil-images/visi-misi-image/') . $request->oldImage) && $request->oldImage) {
                $oldImagePath = public_path('assets/img/profil-images/visi-misi-image/') . $request->oldImage;
                unlink($oldImagePath);
            }

            $image = $request->file('banner');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/profil-images/visi-misi-image/'), $imageName);
            $validatedData['banner'] = $imageName;
        }

        $visionMission = VisionMission::first()->update($validatedData);

        if ($visionMission) {
            return redirect(route('visi-misi-index'))->with('success', 'Berhasil Update Visi Misi Sekolah!');
        } else {
            return redirect(route('visi-misi-index'))->with('failed', 'Gagal Update Visi Misi Sekolah!');
        }
    }

    function editMotto()
    {
        $motto = Motto::first();
        return response()->json($motto);
    }

    function updateMotto(Request $request)
    {
        $validatedData = $request->validate([
            'speaker' => 'required|string|max:255',
            'motto' => 'required|string',
        ]);

        $motto = Motto::first()->update($validatedData);

        if ($motto) {
            return redirect(route('visi-misi-index'))->with('success', 'Berhasil Update Motto Sekolah!');
        } else {
            return redirect(route('visi-misi-index'))->with('failed', 'Gagal Update Motto Sekolah!');
        }
    }
}
