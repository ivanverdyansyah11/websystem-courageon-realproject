<?php

namespace App\Http\Controllers;

use App\Exports\MajalahExport;
use App\Models\Journal;
use App\Models\SectionJournal;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MajalahController extends Controller
{
    function index()
    {
        return view('humas.majalah.index', [
            'title' => 'Humas > Majalah',
            'section_header' => SectionJournal::first(),
            'journals' => Journal::paginate(6),
        ]);
    }

    public function search(Request $request)
    {
        $journals = Journal::where('title', 'like', '%' . $request->search . '%')
            ->orWhere('description', 'like', '%' . $request->search . '%')
            ->orWhere('author', 'like', '%' . $request->search . '%')
            ->orWhere('created_date', 'like', '%' . $request->search . '%')
            ->paginate(6);

        return view('humas.majalah.index', [
            'title' => 'Humas > Majalah',
            'section_header' => SectionJournal::first(),
            'journals' => $journals,
        ]);
    }

    public function generate()
    {
        return Excel::download(new MajalahExport, 'data-majalah.xlsx');
    }

    function detailHeader()
    {
        $section_journal = SectionJournal::first();
        return response()->json($section_journal);
    }

    function updateHeader(Request $request)
    {
        $validatedData = $request->validate([
            'title_header' => 'required|string|max:255',
            'button' => 'required|string|max:255',
        ]);

        $section_journal = SectionJournal::first()->update($validatedData);

        if ($section_journal) {
            return redirect(route('majalah-index'))->with('success', 'Berhasil Update Section Header!');
        } else {
            return redirect(route('majalah-index'))->with('failed', 'Gagal Update Section Header!');
        }
    }

    function createJournal()
    {
        return view('humas.majalah.add', [
            'title' => 'Humas > Majalah',
        ]);
    }

    function storeJournal(Request $request)
    {
        $validatedData = $request->validate([
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'author' => 'required|string',
            'created_date' => 'required|date',
            'document_pdf' => 'required|mimes:pdf',
        ]);

        if ($validatedData['thumbnail'] && $validatedData['document_pdf']) {
            $image = $request->file('thumbnail');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/humas-images/majalah-image/'), $imageName);
            $validatedData['thumbnail'] = $imageName;

            $document = $request->file('document_pdf');
            $documentName = time() . '.' . $document->getClientOriginalExtension();
            $document->move(public_path('assets/img/humas-images/majalah-image/'), $documentName);
            $validatedData['document_pdf'] = $documentName;
        }

        $journal = Journal::create($validatedData);

        if ($journal) {
            return redirect(route('majalah-index'))->with('success', 'Berhasil Tambah Majalah Sekolah!');
        } else {
            return redirect(route('majalah-index'))->with('failed', 'Gagal Tambah Majalah Sekolah!');
        }
    }

    function detailJournal($id)
    {
        return view('humas.majalah.detail', [
            'title' => 'Humas > Majalah',
            'journal' => Journal::where('id', $id)->first(),
        ]);
    }

    function editJournal($id)
    {
        return view('humas.majalah.edit', [
            'title' => 'Humas > Majalah',
            'journal' => Journal::where('id', $id)->first(),
        ]);
    }

    function updateJournal($id, Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'author' => 'required|string',
            'created_date' => 'required|date',
        ]);

        if ($request->file('thumbnail')) {
            if (file_exists(public_path('assets/img/humas-images/majalah-image/') . $request->oldImage) && $request->oldImage) {
                $oldImagePath = public_path('assets/img/humas-images/majalah-image/') . $request->oldImage;
                unlink($oldImagePath);
            }

            $image = $request->file('thumbnail');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/humas-images/majalah-image/'), $imageName);
            $validatedData['thumbnail'] = $imageName;
        } else {
            $validatedData['thumbnail'] = $request->oldImage;
        }

        if ($request->file('document_pdf')) {
            if (file_exists(public_path('assets/img/humas-images/majalah-image/') . $request->oldDocument) && $request->oldDocument) {
                $oldDocumentPath = public_path('assets/img/humas-images/majalah-image/') . $request->oldDocument;
                unlink($oldDocumentPath);
            }

            $document = $request->file('document_pdf');
            $documentName = time() . '.' . $document->getClientOriginalExtension();
            $document->move(public_path('assets/img/humas-images/majalah-image/'), $documentName);
            $validatedData['document_pdf'] = $documentName;
        } else {
            $validatedData['document_pdf'] = $request->oldDocument;
        }

        $journal = Journal::where('id', $id)->first()->update($validatedData);

        if ($journal) {
            return redirect(route('majalah-index'))->with('success', 'Berhasil Edit Majalah Sekolah!');
        } else {
            return redirect(route('majalah-index'))->with('failed', 'Gagal Edit Majalah Sekolah!');
        }
    }

    function deleteJournal($id)
    {
        $journal = Journal::where('id', $id)->first();

        if ($journal->thumbnail && $journal->document_pdf) {
            if (file_exists(public_path('assets/img/humas-images/majalah-image/') . $journal->thumbnail) && $journal->thumbnail) {
                $imagePath = public_path('assets/img/humas-images/majalah-image/') . $journal->thumbnail;
                unlink($imagePath);
            }
            if (file_exists(public_path('assets/img/humas-images/majalah-image/') . $journal->document_pdf) && $journal->document_pdf) {
                $documentPath = public_path('assets/img/humas-images/majalah-image/') . $journal->document_pdf;
                unlink($documentPath);
            }
        }

        $journal = $journal->delete();

        if ($journal) {
            return redirect(route('majalah-index'))->with('success', 'Berhasil Hapus Majalah Sekolah!');
        } else {
            return redirect(route('majalah-index'))->with('failed', 'Gagal Hapus Majalah Sekolah!');
        }
    }
}
