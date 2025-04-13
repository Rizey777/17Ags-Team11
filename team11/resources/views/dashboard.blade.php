<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Kegiatan 17 Agustus') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Judul atau pengantar -->
            <div class="mb-4">
                <h3 class="text-2xl font-bold text-red-600">🎉 Lomba 17 Agustus</h3>
                <p class="text-gray-600 mt-1">Ayo ikut serta dalam berbagai lomba seru untuk memeriahkan Hari Kemerdekaan Indonesia!</p>
            </div>

            <!-- Tombol Riwayat -->
            <div class="mb-6">
                <a href="{{ route('riwayat') }}" class="inline-block bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded shadow transition duration-300">
                    📋 Lihat Riwayat Pendaftaran
                </a>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="inline-block bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded shadow transition duration-300">
                    🚪 Logout
                </button>
            </form>

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
                            <button type="submit" class="mt-3 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded transition duration-200 shadow">
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
