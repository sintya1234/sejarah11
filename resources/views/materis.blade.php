@extends('layouts.main')

@section('container')

<h1> Materi Sejarah Kelas 11 </h1>

@foreach ($sej11_level as $level)
<a href="/kumpulan-materi/{{ $level->id }}"><button type="button" class="btn btn-secondary">{{ $level->judul_sub_bab }}</button></a>
@endforeach
@endsection

