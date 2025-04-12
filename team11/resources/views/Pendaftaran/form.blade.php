<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Form Pendaftaran Kegiatan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">
                <!-- Menampilkan pesan sukses atau error -->
                @if(session('success'))
                    <div class="mb-4 text-green-600">
                        {{ session('success') }}
                    </div>
                @endif
                @if(session('error'))
                    <div class="mb-4 text-red-600">
                        {{ session('error') }}
                    </div>
                @endif

                <h3 class="font-semibold text-lg">Kegiatan: {{ $kegiatan->judul }}</h3>
                <p>Tanggal: {{ $kegiatan->tanggal }} | Lokasi: {{ $kegiatan->lokasi }}</p>

                <form action="{{ route('daftar') }}" method="POST">
                    @csrf
                    <input type="hidden" name="kegiatan_id" value="{{ $kegiatan->id }}">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                        Daftar Sekarang
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
