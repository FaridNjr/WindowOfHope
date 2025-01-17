<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index() {
        return view('upload');
    }
    
    public function store(Request $request) {
        $request->validate([
            'file' => 'required|file|mimes:jpg,png,pdf|max:2048',
        ]);
    
        $path = $request->file('file')->store('upload');
    
        // Simpan informasi file ke database jika perlu
        upload::create([
            'file' => $path,
            'keterangan' => $request->input('keterangan'),
        ]);
    
        return redirect()->back()->with('success', 'File uploaded successfully.');
    }
    
}
