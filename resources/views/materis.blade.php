@extends('layouts.main')

@section('container')

<h1> Materi Sejarah Kelas 11 </h1>

@foreach ($sej11_level as $level)
<li><a href="/kumpulan-materi/{{ $level->id }}"><button type="button" class="btn btn-outline-secondary">{{ $level->judul_sub_bab }}</button></a></li><br>
@endforeach
@endsection

