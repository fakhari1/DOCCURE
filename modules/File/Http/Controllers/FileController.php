<?php

namespace File\Http\Controllers;

use App\Http\Controllers\Controller;
use File\Models\File;
use File\Services\uploader\Uploader;
use Illuminate\Http\Request;


class FileController extends Controller
{
    private Uploader $uploader;

    public function __construct(Uploader $uploader)
    {
        $this->uploader = $uploader;
    }

    public function index()
    {
        $files = File::all();
        return view('Files::files.index', compact('files'));
    }

    public function create()
    {
        return view('Files::files.create');
    }

    public function new(Request $request)
    {
        try {
            $this->validateFile($request);
            $this->uploader->upload();
            return redirect()->back()->withSuccess('file has uploaded successfully');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());

        }
    }

    private function validateFile($request)
    {
        $request->validate([
            'file' => ['required', 'file', 'mimetypes:image/jpeg,video/mp4,application/zip']
        ]);
    }

    public function store()
    {

    }

    public function show(File $file)
    {
        return $file->download();

    }

    public function edit($id)
    {

    }

    public function update($id)
    {

    }

    public function delete(File $file)
    {
        $file->delete();
        return back();
    }


}
