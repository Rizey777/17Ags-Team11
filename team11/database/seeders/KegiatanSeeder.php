<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kegiatan;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kegiatan::create([
            'judul' => 'Lomba Makan Kerupuk',
            'deskripsi' => 'Lomba klasik 17-an',
            'jenis' => 'Perorangan',
            'tanggal' => '2025-08-17',
            'lokasi' => 'Lapangan RW 03',
            'kuota' => 30,
        ]);
        Kegiatan::create([
            'judul' => 'Lomba Balap Karung',
            'deskripsi' => 'Lomba balap karung untuk semua usia.',
            'jenis' => 'Kelompok',
            'tanggal' => '2025-08-17',
            'lokasi' => 'Lapangan RW 03',
            'kuota' => 20,
        ]);
        Kegiatan::create([
            'judul' => 'Lomba Lari Bendera',
            'deskripsi' => 'Lomba lari bendera dengan rintangan seru.',
            'jenis' => 'Perorangan',
            'tanggal' => '2025-08-17',
            'lokasi' => 'Lapangan RW 03',
            'kuota' => 30,
        ]);
    }
}
