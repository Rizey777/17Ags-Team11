<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use Illuminate\Support\Facades\Auth;

class KegiatanController extends Controller
{
    public function index() {
        $kegiatan = Kegiatan::all();
        return view('dashboard', compact('kegiatan'));
    }

    public function show($id) {
        $kegiatan = Kegiatan::findOrFail($id);
        return view('kegiatan.show', compact('kegiatan'));
    }
    
}
