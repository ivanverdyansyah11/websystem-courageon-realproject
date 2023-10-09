<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use App\Models\SectionExtracurricular;
use Illuminate\Http\Request;

class EkstrakurikulerController extends Controller
{
    function index()
    {
        return view('kesiswaan.ekstrakurikuler.index', [
            'title' => 'Kesiswaan > Ekstrakurikuler',
            'section_extracurricular' => SectionExtracurricular::first(),
            'extracurriculars' => Extracurricular::paginate(6),
        ]);
    }

    public function search(Request $request)
    {
        $ekstrakurikulers = Extracurricular::where('name', 'like', '%' . $request->search . '%')
            ->orWhere('title', 'like', '%' . $request->search . '%')
            ->orWhere('description', 'like', '%' . $request->search . '%')
            ->orWhere('schedule_day', 'like', '%' . $request->search . '%')
            ->orWhere('start_time', 'like', '%' . $request->search . '%')
            ->orWhere('end_time', 'like', '%' . $request->search . '%')
            ->orWhere('coach', 'like', '%' . $request->search . '%')
            ->orWhere('number_phone_coach', 'like', '%' . $request->search . '%')
            ->orWhere('link_register', 'like', '%' . $request->search . '%')
            ->paginate(6);

        return view('kesiswaan.ekstrakurikuler.index', [
            'title' => 'Kesiswaan > Ekstrakurikuler',
            'section_extracurricular' => SectionExtracurricular::first(),
            'extracurriculars' => $ekstrakurikulers,
        ]);
    }

    function detailSection()
    {
        $section_extracurricular = SectionExtracurricular::first();
        return response()->json($section_extracurricular);
    }

    function updateSection(Request $request)
    {
        $validatedData = $request->validate([
            'title_section' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $sectionExtracurricular = SectionExtracurricular::first()->update($validatedData);

        if ($sectionExtracurricular) {
            return redirect(route('ekstrakurikuler-index'))->with('success', 'Berhasil Update Section Ekstrakurikuler!');
        } else {
            return redirect(route('ekstrakurikuler-index'))->with('failed', 'Gagal Update Section Ekstrakurikuler!');
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
            'banner' => 'required|image|mimes:jpeg,png,jpg',
            'icon' => 'required|image|mimes:jpeg,png,jpg',
            'data_siswa' => 'required|mimes:pdf',
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'schedule_day' => 'required',
            'start_time' => 'required|string',
            'end_time' => 'required|string',
            'coach' => 'required|string|max:255',
            'number_phone_coach' => 'required|string|max:11',
            'link_register' => 'required|string|max:255',
        ]);

        $validatedData['schedule_day'] = implode(', ', $validatedData['schedule_day']);

        if ($validatedData['data_siswa']) {
            $document = $request->file('data_siswa');
            $documentName = time() . '.' . $document->getClientOriginalExtension();
            $document->move(public_path('assets/img/kesiswaan-images/ekstrakurikuler-image/'), $documentName);
            $validatedData['data_siswa'] = $documentName;
        }

        if ($validatedData['icon']) {
            $image = $request->file('icon');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/kesiswaan-images/ekstrakurikuler-image/'), $imageName);
            $validatedData['icon'] = $imageName;
        }

        if ($validatedData['banner']) {
            $banner = $request->file('banner');
            $bannerName = time() . '.' . $banner->getClientOriginalExtension();
            $banner->move(public_path('assets/img/kesiswaan-images/ekstrakurikuler-image/banner/'), $bannerName);
            $validatedData['banner'] = $bannerName;
        }

        $extracurricular = Extracurricular::create($validatedData);

        if ($extracurricular) {
            return redirect(route('ekstrakurikuler-index'))->with('success', 'Berhasil Tambah Ekstrakurikuler Sekolah!');
        } else {
            return redirect(route('ekstrakurikuler-create'))->with('failed', 'Gagal Tambah Ekstrakurikuler Sekolah!');
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
            'number_phone_coach' => 'required|string|max:11',
            'link_register' => 'required|string|max:255',
        ]);

        $validatedData['schedule_day'] = implode(', ', $validatedData['schedule_day']);

        if ($request->file('icon')) {
            if (file_exists(public_path('assets/img/kesiswaan-images/ekstrakurikuler-image/') . $extracurriculer['icon']) && $extracurriculer['icon']) {
                $oldImagePath = public_path('assets/img/kesiswaan-images/ekstrakurikuler-image/') . $extracurriculer['icon'];
                unlink($oldImagePath);
            }

            $image = $request->file('icon');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/kesiswaan-images/ekstrakurikuler-image/'), $imageName);
            $validatedData['icon'] = $imageName;
        } else {
            $validatedData['icon'] = $extracurriculer['icon'];
        }

        if ($request->file('banner')) {
            if (file_exists(public_path('assets/img/kesiswaan-images/ekstrakurikuler-image/banner/') . $extracurriculer['banner']) && $extracurriculer['banner']) {
                $oldImagePath = public_path('assets/img/kesiswaan-images/ekstrakurikuler-image/banner/') . $extracurriculer['banner'];
                unlink($oldImagePath);
            }

            $image = $request->file('banner');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/kesiswaan-images/ekstrakurikuler-image/banner/'), $imageName);
            $validatedData['banner'] = $imageName;
        } else {
            $validatedData['banner'] = $extracurriculer['banner'];
        }

        if ($request->file('data_siswa')) {
            if (file_exists(public_path('assets/img/kesiswaan-images/ekstrakurikuler-image/') . $extracurriculer['data_siswa']) && $extracurriculer['data_siswa']) {
                $oldImagePath = public_path('assets/img/kesiswaan-images/ekstrakurikuler-image/') . $extracurriculer['data_siswa'];
                unlink($oldImagePath);
            }

            $document = $request->file('data_siswa');
            $documentName = time() . '.' . $document->getClientOriginalExtension();
            $document->move(public_path('assets/img/kesiswaan-images/ekstrakurikuler-image/'), $documentName);
            $validatedData['data_siswa'] = $documentName;
        } else {
            $validatedData['data_siswa'] = $extracurriculer['data_siswa'];
        }

        $extracurricularAction = Extracurricular::where('id', $id)->first()->update($validatedData);

        if ($extracurricularAction) {
            return redirect(route('ekstrakurikuler-index'))->with('success', 'Berhasil Edit Ekstrakurikuler Sekolah!');
        } else {
            return redirect(route('ekstrakurikuler-edit'))->with('failed', 'Gagal Edit Ekstrakurikuler Sekolah!');
        }
    }

    function deleteExtracurriculer($id)
    {
        $extracurricular = Extracurricular::where('id', $id)->first();

        if ($extracurricular->icon) {
            if (file_exists(public_path('assets/img/kesiswaan-images/ekstrakurikuler-image/') . $extracurricular->icon) && $extracurricular->icon) {
                $imagePath = public_path('assets/img/kesiswaan-images/ekstrakurikuler-image/') . $extracurricular->icon;
                unlink($imagePath);
            }
        }

        if ($extracurricular->banner) {
            if (file_exists(public_path('assets/img/kesiswaan-images/ekstrakurikuler-image/banner/') . $extracurricular->banner) && $extracurricular->banner) {
                $imagePath = public_path('assets/img/kesiswaan-images/ekstrakurikuler-image/banner/') . $extracurricular->banner;
                unlink($imagePath);
            }
        }

        if ($extracurricular->data_siswa) {
            if (file_exists(public_path('assets/img/kesiswaan-images/ekstrakurikuler-image/') . $extracurricular->data_siswa) && $extracurricular->data_siswa) {
                $imagePath = public_path('assets/img/kesiswaan-images/ekstrakurikuler-image/') . $extracurricular->data_siswa;
                unlink($imagePath);
            }
        }

        $extracurricular = $extracurricular->delete();

        if ($extracurricular) {
            return redirect(route('ekstrakurikuler-index'))->with('success', 'Berhasil Hapus Ekstrakurikuler Sekolah!');
        } else {
            return redirect(route('ekstrakurikuler-index'))->with('failed', 'Gagal Hapus Ekstrakurikuler Sekolah!');
        }
    }
}
