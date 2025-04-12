<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Kegiatan 17 Agustus') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">
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

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach ($kegiatan as $item)
                    <div class="p-4 border rounded shadow">
                        <!-- Menambahkan gambar kegiatan -->
                        @if ($item->gambar)
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-64 object-cover mb-4">
                        @else
                            <img src="{{ asset('images/default-image.jpg') }}" alt="No image available" class="w-full h-64 object-cover mb-4">
                        @endif
                        
                        <h2 class="font-semibold text-lg">{{ $item->judul }}</h2>
                        <p>{{ $item->tanggal }} di {{ $item->lokasi }}</p>
                
                        <!-- Formulir untuk mendaftar -->
                        <form action="{{ route('pendaftaran.form', $item->id) }}" method="GET">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                                Daftar Sekarang
                            </button>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
