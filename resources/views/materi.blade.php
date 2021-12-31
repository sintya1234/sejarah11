@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-mb-3">
            <h1 class="mb-3">{{ $sej11_level->judul_sub_bab }}</h1>

            <img src="{{ $sej11_level->gambar_utuh }}"
            class="card-img-top" alt="..." class="card-img-top" alt="...">

            <article class="my-3 fs-5">
                {!! $sej11_level->materi !!}{{-- supaya yag html terpakai tapi tidak dicetak good --}}
            </article>
            <a href="/kumpulan-materi" class="d-block mt-3">Kembali ke List materi</a>
        </div>
    </div>
</div>
@endsection

