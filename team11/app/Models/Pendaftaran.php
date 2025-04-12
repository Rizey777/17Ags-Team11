<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'kegiatan_id'];

    // Relasi ke Kegiatan
    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class);
    }

    // Relasi ke User (jika ada)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
