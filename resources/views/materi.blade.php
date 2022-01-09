@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-mb-3">
                
                <h1 class="mb-3">{{ $sej11_level->judul_sub_bab }}</h1>

                @foreach ($gambar_materi as $gambar_mater)
                    <img src="{{ $gambar_mater->gambar_materi }}" class="card-img-top" alt="..." class="card-img-top"
                        alt="...">
                @endforeach


                <article class="my-3 fs-5">
                    {!! $sej11_level->materi !!}{{-- supaya yag html terpakai tapi tidak dicetak good --}}
                </article>

                <a href="/kumpulan-materi" class="btn btn-secondary">Kembali ke List Materi</a>

                <a href="/kumpulan-materi/{{ $sej11_level->id - 1 }}" class="btn btn-secondary">Pergi ke materi
                    sebelumnya</a>

                <a href="/kumpulan-materi/{{ $sej11_level->id + 1 }}" class="btn btn-secondary">Pergi ke materi
                    berikutnya</a>

            </div>
        </div>


    </div>
@endsection
