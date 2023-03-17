<?php

namespace App\Http\Controllers;

use App\Datauploading;
use Illuminate\Http\Request;

class DatauploadingController extends Controller
{
    public function index()
    {
        $data_uploadings = Datauploading::get();
        return view('data_uploading.index', compact('data_uploadings'));
    }

    public function create()
    {
        return view('data_uploading.create');
    }

    public function createwithoutsubmenu()
    {
        return view('data_uploading.createwithoutsubmenu');
    }

    public function store(Request $request)
    {
        $pptPath = array();
        $pdfPath = array();
        $audioPath = array();
        $data_uploading = Datauploading::create($request->except('ppts', 'pdfs','audios'));
        if ($request->ppts) {
            foreach ($request->file('ppts') as $ppt) {
                $pptPath[] = $ppt->store('sub_menu/data/'.$data_uploading->title.'/ppts', 'public');
            }
            $data_uploading->update([
                'ppts' => $pptPath
            ]);
        }
        if ($request->pdfs) {
            foreach ($request->file('pdfs') as $pdf) {
                $pdfPath[] = $pdf->store('sub_menu/data/' . $data_uploading->title . '/pdfs', 'public');
            }
            $data_uploading->update([
                'pdfs' => $pdfPath
            ]);
        }
        if ($request->audios) {
            foreach ($request->file('audios') as $audio) {
                $audioPath[] = $audio->store('sub_menu/data/' . $data_uploading->title . '/audios', 'public');
            }
            $data_uploading->update([
                'audios' => $audioPath
            ]);
        }

        return redirect(route('data_uploadings.index'))->with('success', 'Data Created Successfully');
    }

    public function show(Datauploading $data_uploading)
    {

        return view('data_uploading.show', compact('data_uploading'));
    }

    public function edit(Datauploading $data_uploading)
    {
        return view('data_uploading.edit', compact('data_uploading'));
    }

    public function editwithoutsubmenu(Datauploading $data_uploading)
    {
        return view('data_uploading.editwithoutsubmenu', compact('data_uploading'));
    }

    public function update(Request $request, Datauploading $data_uploading)
    {
        $pptPath = array();
        $pdfPath = array();
        $audioPath = array();
        $data_uploading->update($request->except('ppts', 'pdfs','audios'));
        if ($request->ppts) {
            foreach ($request->file('ppts') as $ppt) {
                $pptPath[] = $ppt->store('sub_menu/data/' . $data_uploading->title . '/ppts', 'public');
            }
            $data_uploading->update([
                'ppts' => $pptPath
            ]);
        }
        if ($request->pdfs) {
            foreach ($request->file('pdfs') as $pdf) {
                $pdfPath[] = $pdf->store('sub_menu/data/' . $data_uploading->title . '/pdfs', 'public');
            }
            $data_uploading->update([
                'pdfs' => $pdfPath
            ]);
        }
        if ($request->audios) {
            foreach ($request->file('audios') as $audio) {
                $audioPath[] = $audio->store('sub_menu/data/' . $data_uploading->title . '/audios', 'public');
            }
            $data_uploading->update([
                'audios' => $audioPath
            ]);
        }
        return redirect(route('data_uploadings.index'))->with('success', 'Data Updated Successfully');
    }

    public function destroy(Datauploading $data_uploading)
    {
        $data_uploading->delete();
        return redirect(route('data_uploadings.index'))->with('warning', 'Data Deleted Successfully');
    }
}
