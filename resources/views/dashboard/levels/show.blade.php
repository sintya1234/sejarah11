@extends('dashboard.layouts.main')

@section('container')

    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
              
                <h1 class="mb-3">{{ $sej11_level->judul_sub_bab }}</h1>

                <a href="/dashboard/levels" class="btn btn-success"><span data-feather="arrow-left"></span>Kembali ke semua
                    daftar Level</a>
                <a href="/dashboard/posts/{{ $sej11_level->id }}/edit" class="btn btn-warning"><span
                        data-feather="edit"></span>Edit</a>

                <h3 class="mb-3">Gambar Utuh</h3>
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ $sej11_level->gambar_utuh }}" alt="" class="img-fluid mt-3">
                </div>

                <h3 class="mb-3">Materi</h3>
                <article class="my-3 fs-5">
                    {!! $sej11_level->materi !!}{{-- supaya yag html terpakai tapi tidak dicetak good --}}
                </article>

                <h3 class="mb-3">Soal</h3>
                @foreach ($sej11_level->sej11_soals as $sej11_soal)
               {{ $loop->iteration }}<a>. {{ $sej11_soal->soal }}</a><br>
               <br>
               <a>pilihan ganda:</a>
               <br>
                    @foreach ($sej11_soal->sej11_opsi_pilgans as $sej11_opsi_pilgan)
                        <li><a>{{ $sej11_opsi_pilgan->opsi_pg }}</a></li><br>
                        {{-- {{ dd($sej11_opsi_pilgan) }} --}}
                    @endforeach
                @endforeach

            </div>
        </div>
    </div>

    {{-- <article>
<h2>{{ $post["judul"] }}</h2>
<h5>{{ $post["author"] }}</h5>
<h6>{{ $post["body"] }}</h6>
</article> --}}
@endsection
