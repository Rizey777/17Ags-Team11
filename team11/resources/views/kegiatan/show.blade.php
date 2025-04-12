@extends('layouts.app')
@section('content')
<div>
    <h1>{{ $kegiatan->judul }}</h1>
    <p>{{ $kegiatan->deskripsi }}</p>
    <p>{{ $kegiatan->tanggal }} - {{ $kegiatan->lokasi }}</p>
    <form action="/daftar/{{ $kegiatan->id }}" method="POST">
        @csrf
        <button type="submit">Daftar</button>
    </form>
</div>
@endsection
