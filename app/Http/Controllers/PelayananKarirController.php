<?php

namespace App\Http\Controllers;

use App\Models\PelayananKarir;
use App\Models\SectionService;
use App\Models\Student;
use Illuminate\Http\Request;

class PelayananKarirController extends Controller
{
    function index()
    {
        return view('kesiswaan.pelayanan-karir.index', [
            'title' => 'Kesiswaan > Pelayanan Karir',
            'section_service' => SectionService::first(),
            'pelayanan_karir' => PelayananKarir::paginate(6),
        ]);
    }

    function detailSection()
    {
        $section_service = SectionService::first();
        return response()->json($section_service);
    }

    function updateSection(Request $request)
    {
        $validatedData = $request->validate([
            'title_section' => 'required|string|max:255',
            'description' => 'required|string',
            'button' => 'required|string|max:255',
        ]);

        $sectionService = SectionService::first()->update($validatedData);

        if ($sectionService) {
            return redirect(route('pelayanan-karir-index'))->with('success', 'Berhasil Update Section Pelayanan Karir!');
        } else {
            return redirect(route('pelayanan-karir-index'))->with('failed', 'Gagal Update Section Pelayanan Karir!');
        }
    }

    function createPelayananKarir()
    {
        return view('kesiswaan.pelayanan-karir.create', [
            'title' => 'Kesiswaan > Pelayanan Karir',
            'section_service' => SectionService::first(),
            'students' => Student::all(),
        ]);
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
