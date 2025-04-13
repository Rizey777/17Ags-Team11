<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GambarController extends Controller
{
   
    public function upload(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,jfif|max:2048',
        ]);

        $path = $request->file('gambar')->store('gambar_kegiatan', 'public');

        return redirect()->back()->with('success', 'Gambar berhasil diunggah!');
    }
}
