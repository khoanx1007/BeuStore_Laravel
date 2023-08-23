<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Toastr;

class StorageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = Storage::disk('public')->allFiles();
        unset($files[0]);
        return view('backend.storage')->with([
            'files' => $files
        ]);
    }
    public function destroy(Request $request)
    {
        Storage::disk('public')->delete($request->get('file'));
        return redirect()->route('backend.storage');
    }
    public function download($url)
    {
        //    $data = Storage::disk('public')->download($request->get('file'));
        //    dd($data);
        return Storage::download($url);
    }
}
