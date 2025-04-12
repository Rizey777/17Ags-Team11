@foreach ($riwayat as $item)
    <div>
        <h4>{{ $item->kegiatan->judul }}</h4>
        <p>{{ $item->kegiatan->tanggal }} | {{ $item->kegiatan->lokasi }}</p>
        
        <!-- Menampilkan gambar jika ada -->
        @if($item->gambar)
            <img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar Pendaftaran" class="w-32 h-32 object-cover">
        @else
            <p>Tidak ada gambar</p>
        @endif
    </div>
@endforeach
