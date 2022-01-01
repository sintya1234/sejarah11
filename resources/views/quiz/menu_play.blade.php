@extends('layouts.main')

@section('container')

<h1>Tema quiz: {{ $sej11_level->judul_sub_bab }}</h1>

<div class="d-grid gap-2 mb-3 rowmx-auto">
    <button type="button" class="btn btn-outline-danger">Play</button>
</div>
<div class="d-grid gap-2 mb-3 mx-auto">
    {{-- <button type="button" ></button> --}}
    <a href="/kumpulan-materi/{{ $sej11_level->id }}" class="btn btn-outline-warning">Baca Materi</a>
</div>
<div class="d-grid gap-2 mb-3 mx-auto">
    <button type="button" class="btn btn-outline-success">Leaderboard</button>
</div>
<div class="d-grid gap-2 mb-3 mx-auto">
    {{-- <button type="button" class="btn btn-outline-primary">Profile</button> --}}
    <a href="/quiz" class="btn btn-outline-primary">Kembali</a>
</div>
@endsection