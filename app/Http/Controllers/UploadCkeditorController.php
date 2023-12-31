<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentTable;

class UploadCkeditorController extends Controller
{
    //
    public function store(Request $request)
    {
        $student = new StudentTable();

        $student->title = $request->title;
        $student->description = $request->description;

        $student->save();

        return redirect()->back();

    }

    public function show(){
        $student = StudentTable::all();

        return view('show', compact('student'));
    }

    public function uploadImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '_' . $extension;

            $request->file('upload')->move(public_path('media'), $fileName);
            $url = asset('media/' . $fileName);

            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }
}
