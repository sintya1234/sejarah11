@extends('layouts.main')
@section('container')
    <h1>Potongan gambar yang kamu dapat</h1>

    @foreach ($show_gambars as $gambar)
        <img src="{{ $gambar }}" class="card-img-top" alt="..." class="card-img-top" alt="...">
    @endforeach
    
    <h1>Youre score: {{ $sej11_user_level }}</h1>


    <div class="d-grid gap-2 mb-3 mx-auto">
        {{-- <button type="button" class="btn btn-outline-primary">Profile</button> --}}
        <a href="/quiz/{{ $sej11_soal[0]->sej11__level_id }}/leaderboard" class="btn btn-outline-primary">Kembali</a>
   
    </div>



   
    <div class="d-grid gap-2 mb-3 mx-auto">
        <button type="button" class="btn btn-outline-secondary" href="/leaderboard">Play again</button>
    </div>   
    <div class="d-grid gap-2 mb-3 mx-auto">
        {{-- <button type="button" class="btn btn-outline-primary">Profile</button> --}}
        <a href="/quiz" class="btn btn-outline-primary">Kembali</a>
    </div>

@endsection
