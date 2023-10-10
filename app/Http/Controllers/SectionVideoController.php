<?php

namespace App\Http\Controllers;

use App\Models\SectionVideo;
use App\Models\Video;
use Illuminate\Http\Request;

class SectionVideoController extends Controller
{
    function index()
    {
        return view('profil.video.index', [
            'title' => 'Profil > Video',
            'section_video' => SectionVideo::first(),
            'videos' => Video::paginate(6),
        ]);
    }

    function detailSection()
    {
        $section_video = SectionVideo::first();
        return response()->json($section_video);
    }

    function updateSection(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'button' => 'required|string',
        ]);

        $sectionVideo = SectionVideo::first()->update($validatedData);

        if ($sectionVideo) {
            return redirect(route('video-index'))->with('success', 'Berhasil Update Section Video!');
        } else {
            return redirect(route('video-index'))->with('failed', 'Gagal Update Section Video!');
        }
    }

    function detailVideo($id)
    {
        $video = Video::where('id', $id)->first();
        return response()->json($video);
    }

    function storeVideo(Request $request)
    {
        $validatedData = $request->validate([
            'link' => 'required|string',
        ]);

        $video = Video::create($validatedData);

        if ($video) {
            return redirect(route('video-index'))->with('success', 'Berhasil Tambah Video!');
        } else {
            return redirect(route('video-index'))->with('failed', 'Gagal Tambah Video!');
        }
    }

    function updateVideo($id, Request $request)
    {
        $validatedData = $request->validate([
            'link' => 'required|string',
        ]);

        $video = Video::where('id', $id)->first()->update($validatedData);

        if ($video) {
            return redirect(route('video-index'))->with('success', 'Berhasil Update Video!');
        } else {
            return redirect(route('video-index'))->with('failed', 'Gagal Update Video!');
        }
    }

    function deleteVideo($id)
    {
        $video = Video::where('id', $id)->first();
        $video = $video->delete();

        if ($video) {
            return redirect(route('video-index'))->with('success', 'Berhasil Hapus Video!');
        } else {
            return redirect(route('video-index'))->with('failed', 'Gagal Hapus Video!');
        }
    }
}
