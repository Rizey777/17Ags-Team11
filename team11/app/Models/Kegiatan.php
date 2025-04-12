<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'deskripsi', 'jenis', 'tanggal', 'lokasi', 'kuota', 'gambar'];

    // Relasi ke Pendaftaran
    public function pendaftarans()
    {
        return $this->hasMany(Pendaftaran::class);
    }
}
