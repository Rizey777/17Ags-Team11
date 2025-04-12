<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use App\Models\Pendaftaran;
use Illuminate\Support\Facades\Auth;

class PendaftaranController extends Controller
{
    public function index()
    {
        $kegiatan = Kegiatan::all();
        return view('dashboard', compact('kegiatan'));
    }
    public function showForm($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        return view('pendaftaran.form', compact('kegiatan'));
    }
    public function daftar(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'kegiatan_id' => 'required|exists:kegiatans,id',
        ]);
    
        // Memeriksa apakah pengguna sudah mendaftar untuk kegiatan ini
        $sudahDaftar = Pendaftaran::where('user_id', auth()->id())
                                  ->where('kegiatan_id', $validated['kegiatan_id'])
                                  ->exists();
    
        // Jika sudah mendaftar, tampilkan pesan error
        if ($sudahDaftar) {
            return back()->with('error', 'Anda sudah mendaftar untuk kegiatan ini.');
        }
    
        // Mendaftarkan pengguna ke kegiatan
        Pendaftaran::create([
            'user_id' => auth()->id(),
            'kegiatan_id' => $validated['kegiatan_id'],
        ]);
    
        // Mengarahkan ke halaman riwayat dengan pesan sukses
        return redirect()->route('riwayat')->with('success', 'Pendaftaran berhasil!');
    }
    
    
    

    public function riwayat() {
        $riwayat = Pendaftaran::where('user_id', auth()->id())->with('kegiatan')->get();
        return view('pendaftaran.riwayat', compact('riwayat'));
    }
}
