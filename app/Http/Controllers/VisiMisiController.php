<?php

namespace App\Http\Controllers;

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
        ]);
    }

    function editVisionMission()
    {
        $vision_mission = VisionMission::first();
        return response()->json($vision_mission);
    }

    function updateVisionMission(Request $request)
    {
        $validatedData = $request->validate([
            'title_vision' => 'required|string|max:255',
            'description_vision' => 'required|string',
            'title_mission' => 'required|string|max:255',
            'description_mission' => 'required|string',
        ]);

        if ($request->file('banner')) {
            Storage::delete($request->oldImage);
            $validatedData['banner'] = $request->file('banner')->store('profil-images/visi-misi-image');
        } else {
            $validatedData['banner'] = $request->oldImage;
        }

        $visionMission = VisionMission::first()->update($validatedData);

        if ($visionMission) {
            return redirect(route('visi-misi-index'))->with('success', 'Berhasil Update Visi Misi Sekolah!');
        } else {
            return redirect(route('visi-misi-index'))->with('failed', 'Gagal Update Visi Misi Sekolah!');
        }
    }
}
