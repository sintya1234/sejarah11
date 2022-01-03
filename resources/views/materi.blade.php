@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-mb-3">
            <a href="/kumpulan-materi" class="btn btn-secondary">Kembali ke List Materi</a>

            <a href="/kumpulan-materi/{{ $sej11_level -> id - 1}}" class="btn btn-secondary">Pergi ke materi sebelumnya</a>

            <a href="/kumpulan-materi/{{ $sej11_level -> id + 1}}" class="btn btn-secondary">Pergi ke materi berikutnya</a>

            <h1 class="mb-3">{{ $sej11_level->judul_sub_bab }}</h1>

            <img src="{{ $sej11_level->gambar_utuh }}"
            class="card-img-top" alt="..." class="card-img-top" alt="...">

            <article class="my-3 fs-5">
                {!! $sej11_level->materi !!}{{-- supaya yag html terpakai tapi tidak dicetak good --}}
            </article>
        </div>
    </div>
</div>
@endsection

