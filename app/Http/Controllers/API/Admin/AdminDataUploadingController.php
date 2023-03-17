<?php

namespace App\Http\Controllers\API\Admin;

use App\Datauploading;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDataUploadingController extends Controller
{
    public function createDatauploading(Request $request)
    {

        $pptPath = array();
        $pdfPath = array();
        $audioPath = array();
        $data_uploading = Datauploading::create($request->except('ppts', 'pdfs','audios'));
        if ($request->ppts) {
            foreach ($request->file('ppts') as $ppt) {
                $pptPath[] = $ppt->store('datauploading/data/'.$data_uploading->title.'/ppts', 'public');
            }
            $data_uploading->update([
                'ppts' => $pptPath
            ]);
        }
        if ($request->pdfs) {
            foreach ($request->file('pdfs') as $pdf) {
                $pdfPath[] = $pdf->store('datauploading/data/' . $data_uploading->title . '/pdfs', 'public');
            }
            $data_uploading->update([
                'pdfs' => $pdfPath
            ]);
        }
        if ($request->audios) {
            foreach ($request->file('audios') as $audio) {
                $audioPath[] = $audio->store('datauploading/data/' . $data_uploading->title . '/audios', 'public');
            }
            $data_uploading->update([
                'audios' => $audioPath
            ]);
        }
        if($datauploading)
        {
            return response()->json(['datauploading' => 'yes']);
        }
        else
        {
            return response()->json(['datauploading' => 'no']);
        }
    }
    public function editDatauploading(Request $request)
    {
        $datauploading = Datauploading::where('id', $request->id)->first();

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

        if ($request->hasFile('icon')) {
            $image_path = $request->file('icon')->store('datauploading/' . $datauploading->id . '/icons', 'public');
            $datauploading->update([
                'icon' => $image_path
            ]);
        }
        if($datauploading)
        {
            return response()->json(['datauploading' => 'yes']);
        }
        else
        {
            return response()->json(['datauploading' => 'no']);
        }
    }
    public function deleteDatauploading(Request $request)
    {
        $datauploading = Datauploading::where('id', $request->id)->first();
        $datauploading->delete();
     
        if($datauploading)
        {
            return response()->json(['datauploading' => "deleted"]);
        }
        else
        {
            return response()->json(['datauploading' => "not deleted"]);
        }
    }
}
