<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    //
    function upload_file(Request $request) {
        // return $request;
        $path = $request->file('file')->store('public');
        // $path = $request->file('file')->storeAs('public', 'filename.extension');

        // extract filename
        $filenameArr = explode('/', $path);
        $filename = $filenameArr[1];

        return view('display', ['path'=>$filename]);
    }
}
