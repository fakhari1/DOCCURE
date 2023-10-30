<?php

namespace Uploader\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUploaderRequest;
use Uploader\Http\Requests\StoreUploaderRequest;
use Uploader\Models\Uploader;

class UploaderController extends Controller
{
    public function index()
    {
        return view('Uploader::index');

    }
    public function create()
    {
        return view('Uploader::create');
    }
    public function store(StoreUploaderRequest $request)
    {


    }
    public function show(Uploader $uploader)
    {

    }
    public function edit(Uploader $uploader)
    {

    }
    public function update(Uploader $uploader,UpdateUploaderRequest $request)
    {

    }
    public function destroy(Uploader $uploader)
    {

    }

}
