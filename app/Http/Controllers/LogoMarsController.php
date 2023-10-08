<?php

namespace App\Http\Controllers;

use App\Models\Hymne;
use App\Models\Logo;
use App\Models\Mars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LogoMarsController extends Controller
{
    function index()
    {
        return view('profil.logo-mars.index', [
            'title' => 'Profil > Logo & Mars',
            'logo' => Logo::first(),
            'mars' => Mars::first(),
            'hymne' => Hymne::first(),
        ]);
    }

    function detailLogo()
    {
        return view('profil.logo-mars.detail-logo', [
            'title' => 'Profil > Logo & Mars',
            'logo' => Logo::first(),
        ]);
    }

    function editLogo()
    {
        return view('profil.logo-mars.edit-logo', [
            'title' => 'Profil > Logo & Mars',
            'logo' => Logo::first(),
        ]);
    }

    function sendLogo()
    {
        $logo = Logo::first();
        return response()->json($logo);
    }

    function updateLogo(Request $request)
    {
        $logo = Logo::first();
        $validatedData = $request->validate([
            'logo_meaning' => 'required|string',
            'font_meaning' => 'required|string',
            'color_meaning' => 'required|string',
        ]);

        if ($request->file('logo')) {
            if (file_exists(public_path('assets/img/brand/') . $logo->logo) && $logo->logo) {
                $oldImagePath = public_path('assets/img/brand/') . $logo->logo;
                unlink($oldImagePath);
            }

            $image = $request->file('logo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/brand/'), $imageName);
            $validatedData['logo'] = $imageName;
        } else {
            $validatedData['logo'] = $logo->logo;
        }

        $logoAction = Logo::first()->update($validatedData);

        if ($logoAction) {
            return redirect(route('logo-mars-index'))->with('success', 'Berhasil Update Logo Sekolah!');
        } else {
            return redirect(route('logo-mars-index'))->with('failed', 'Gagal Update Logo Sekolah!');
        }
    }

    function detailMars()
    {
        return view('profil.logo-mars.detail-mars', [
            'title' => 'Profil > Logo & Mars',
            'mars' => Mars::first(),
        ]);
    }

    function editMars()
    {
        return view('profil.logo-mars.edit-mars', [
            'title' => 'Profil > Logo & Mars',
            'mars' => Mars::first(),
        ]);
    }

    function updateMars(Request $request)
    {
        $mars = Mars::first();
        $validatedData = $request->validate([
            'title_section' => 'required|string|max:255',
            'mars' => 'required|string',
            'creation' => 'required|string|max:255',
        ]);

        if ($request->file('banner')) {
            if (file_exists(public_path('assets/img/profil-images/mars-image/') . $mars->banner) && $mars->banner) {
                $oldImagePath = public_path('assets/img/profil-images/mars-image/') . $mars->banner;
                unlink($oldImagePath);
            }

            $image = $request->file('banner');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/profil-images/mars-image/'), $imageName);
            $validatedData['banner'] = $imageName;
        } else {
            $validatedData['banner'] = $mars->banner;
        }

        $marsAction = Mars::first()->update($validatedData);

        if ($marsAction) {
            return redirect(route('logo-mars-index'))->with('success', 'Berhasil Update Mars Sekolah!');
        } else {
            return redirect(route('logo-mars-index'))->with('failed', 'Gagal Update Mars Sekolah!');
        }
    }

    function detailHymne()
    {
        return view('profil.logo-mars.detail-hymne', [
            'title' => 'Profil > Logo & Mars',
            'hymne' => Hymne::first(),
        ]);
    }

    function editHymne()
    {
        return view('profil.logo-mars.edit-hymne', [
            'title' => 'Profil > Logo & Mars',
            'hymne' => Hymne::first(),
        ]);
    }

    function updateHymne(Request $request)
    {
        $hymne = Hymne::first();
        $validatedData = $request->validate([
            'title_section' => 'required|string|max:255',
            'hymne' => 'required|string',
            'creation' => 'required|string|max:255',
        ]);

        if ($request->file('banner')) {
            if (file_exists(public_path('assets/img/profil-images/hymne-image/') . $hymne->banner) && $hymne->banner) {
                $oldImagePath = public_path('assets/img/profil-images/hymne-image/') . $hymne->banner;
                unlink($oldImagePath);
            }

            $image = $request->file('banner');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/profil-images/hymne-image/'), $imageName);
            $validatedData['banner'] = $imageName;
        } else {
            $validatedData['banner'] = $hymne->banner;
        }

        $hymneAction = Hymne::first()->update($validatedData);

        if ($hymneAction) {
            return redirect(route('logo-mars-index'))->with('success', 'Berhasil Update Hymne Sekolah!');
        } else {
            return redirect(route('logo-mars-index'))->with('failed', 'Gagal Update Hymne Sekolah!');
        }
    }
}
