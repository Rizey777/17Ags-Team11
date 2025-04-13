@foreach ($riwayat as $item)
    <div class="kartu-riwayat">
        <h4>{{ $item->kegiatan->judul }}</h4>
        <p>{{ $item->kegiatan->tanggal }} | {{ $item->kegiatan->lokasi }}</p>

        @if($item->gambar)
            <img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar Pendaftaran" class="w-32 h-32 object-cover mt-2">
        @else
            <p class="text-gray-500">Tidak ada gambar</p>
        @endif
    </div>
@endforeach

<!-- Pesan Selamat -->
<div class="message-pesan-selamat">
    <p class="font-semibold text-lg text-green-600">Selamat! Anda telah berhasil mendaftar lomba, tetap semangat! 🎉</p>
</div>

<div>
    <a href="{{ route('dashboard') }}" class="kembali-btn">
        Kembali ke Lobby
    </a>
</div>

<style>
    .kartu-riwayat {
        margin-bottom: 1rem;
        padding: 1rem;
        border: 1px solid #ccc;
        border-radius: 12px;
        background-color: #fff;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        transition: 0.3s ease-in-out;
    }
    .kartu-riwayat:hover {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }
    .kartu-riwayat h4 {
        font-size: 1.125rem;
        font-weight: 600;
        color: #2d3748;
    }
    .kartu-riwayat p {
        font-size: 0.875rem;
        color: #4a5568;
        margin-top: 0.25rem;
    }
    .kartu-riwayat img {
        margin-top: 0.5rem;
        width: 128px;
        height: 128px;
        object-fit: cover;
    }
    
    .kembali-btn {
        display: inline-block;
        margin-top: 1.5rem;
        background-color: #2563eb;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 8px;
        font-weight: 600;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: background-color 0.2s ease-in-out;
        text-decoration: none;
    }
    .kembali-btn:hover {
        background-color: #1e40af;
    }

    .message-pesan-selamat {
        margin-bottom: 2rem;
        background-color: #e0f2fe;
        padding: 1rem;
        border-radius: 8px;
        text-align: center;
    }

    .message-pesan-selamat p {
        font-size: 1.125rem;
        font-weight: bold;
        color: #1d4ed8;
    }
</style>
