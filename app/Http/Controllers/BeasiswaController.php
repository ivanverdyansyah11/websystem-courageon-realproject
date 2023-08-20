<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Models\SectionBeasiswa;
use Illuminate\Http\Request;

class BeasiswaController extends Controller
{
    function index()
    {
        return view('kesiswaan.beasiswa.index', [
            'title' => 'Kesiswaan > Beasiswa',
            'section_beasiswa' => SectionBeasiswa::first(),
            'beasiswas' => Beasiswa::paginate(6),
        ]);
    }

    function detailSection()
    {
        $section_beasiswa = SectionBeasiswa::first();
        return response()->json($section_beasiswa);
    }

    function updateSection(Request $request)
    {
        $validatedData = $request->validate([
            'title_section' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $sectionBeasiswa = SectionBeasiswa::first()->update($validatedData);

        if ($sectionBeasiswa) {
            return redirect(route('beasiswa-index'))->with('success', 'Berhasil Update Section Beasiswa!');
        } else {
            return redirect(route('beasiswa-index'))->with('failed', 'Gagal Update Section Beasiswa!');
        }
    }

    function storeBeasiswa(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $Beasiswa = Beasiswa::create($validatedData);

        if ($Beasiswa) {
            return redirect(route('beasiswa-index'))->with('success', 'Berhasil Tambah Beasiswa Sekolah!');
        } else {
            return redirect(route('beasiswa-index'))->with('failed', 'Gagal Tambah Beasiswa Sekolah!');
        }
    }

    function detailBeasiswa($id)
    {
        $beasiswa = Beasiswa::where('id', $id)->first();
        return response()->json($beasiswa);
    }

    function updateBeasiswa($id, Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $Beasiswa = Beasiswa::where('id', $id)->first()->update($validatedData);

        if ($Beasiswa) {
            return redirect(route('beasiswa-index'))->with('success', 'Berhasil Update Beasiswa Sekolah!');
        } else {
            return redirect(route('beasiswa-index'))->with('failed', 'Gagal Update Beasiswa Sekolah!');
        }
    }

    function deleteBeasiswa($id)
    {
        $beasiswa = Beasiswa::where('id', $id)->first();

        $beasiswa = $beasiswa->delete();

        if ($beasiswa) {
            return redirect(route('beasiswa-index'))->with('success', 'Berhasil Hapus Beasiswa Sekolah!');
        } else {
            return redirect(route('beasiswa-index'))->with('failed', 'Gagal Hapus Beasiswa Sekolah!');
        }
    }

    function createExtracurriculer()
    {
        return view('kesiswaan.ekstrakurikuler.create', [
            'title' => 'Kesiswaan > Ekstrakurikuler',
        ]);
    }

    function storeExtracurriculer(Request $request)
    {
        $validatedData = $request->validate([
            'icon' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'schedule_day' => 'required',
            'start_time' => 'required|string',
            'end_time' => 'required|string',
            'coach' => 'required|string|max:255',
            'number_phone_coach' => 'required|string||max:11',
            'link_register' => 'required|string||max:255',
        ]);

        $validatedData['schedule_day'] = implode(', ', $validatedData['schedule_day']);

        if ($validatedData['icon']) {
            $image = $request->file('icon');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/kesiswaan-images/ekstrakurikuler-image/'), $imageName);
            $validatedData['icon'] = $imageName;
        }

        $extracurricular = Extracurricular::create($validatedData);

        if ($extracurricular) {
            return redirect(route('ekstrakurikuler-index'))->with('success', 'Berhasil Tambah Ekstrakurikuler Sekolah!');
        } else {
            return redirect(route('ekstrakurikuler-index'))->with('failed', 'Gagal Tambah Ekstrakurikuler Sekolah!');
        }
    }

    function detailExtracurriculer($id)
    {
        $extracurricular = Extracurricular::where('id', $id)->first();
        $schedule_days = explode(', ', $extracurricular->schedule_day);

        return view('kesiswaan.ekstrakurikuler.detail', [
            'title' => 'Kesiswaan > Ekstrakurikuler',
            'extracurricular' => Extracurricular::where('id', $id)->first(),
            'schedule_days' => $schedule_days,
        ]);
    }

    function editExtracurriculer($id)
    {
        $extracurricular = Extracurricular::where('id', $id)->first();
        $schedule_days = explode(', ', $extracurricular->schedule_day);

        return view('kesiswaan.ekstrakurikuler.edit', [
            'title' => 'Kesiswaan > Ekstrakurikuler',
            'extracurricular' => Extracurricular::where('id', $id)->first(),
            'schedule_days' => $schedule_days,
        ]);
    }

    function updateExtracurriculer($id, Request $request)
    {
        $extracurriculer = Extracurricular::where('id', $id)->first();
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'schedule_day' => 'required',
            'start_time' => 'required|string',
            'end_time' => 'required|string',
            'coach' => 'required|string|max:255',
            'number_phone_coach' => 'required|string||max:11',
            'link_register' => 'required|string||max:255',
        ]);

        $validatedData['schedule_day'] = implode(', ', $validatedData['schedule_day']);

        if ($request->file('icon')) {
            $oldImagePath = public_path('assets/img/kesiswaan-images/ekstrakurikuler-image/') . $extracurriculer['icon'];
            unlink($oldImagePath);

            $image = $request->file('icon');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/kesiswaan-images/ekstrakurikuler-image/'), $imageName);
            $validatedData['icon'] = $imageName;
        } else {
            $validatedData['icon'] = $request->oldImage;
        }

        $extracurricularAction = Extracurricular::where('id', $id)->first()->update($validatedData);

        if ($extracurricularAction) {
            return redirect(route('ekstrakurikuler-index'))->with('success', 'Berhasil Edit Ekstrakurikuler Sekolah!');
        } else {
            return redirect(route('ekstrakurikuler-index'))->with('failed', 'Gagal Edit Ekstrakurikuler Sekolah!');
        }
    }

    function deleteExtracurriculer($id)
    {
        $extracurricular = Extracurricular::where('id', $id)->first();

        if ($extracurricular->icon) {
            $imagePath = public_path('assets/img/kesiswaan-images/ekstrakurikuler-image/') . $extracurricular->icon;
            unlink($imagePath);
        }

        $extracurricular = $extracurricular->delete();

        if ($extracurricular) {
            return redirect(route('ekstrakurikuler-index'))->with('success', 'Berhasil Hapus Ekstrakurikuler Sekolah!');
        } else {
            return redirect(route('ekstrakurikuler-index'))->with('failed', 'Gagal Hapus Ekstrakurikuler Sekolah!');
        }
    }
}
