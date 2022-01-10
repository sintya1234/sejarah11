@extends('layouts.main')

@section('container')

    <h1>Leaderboard level : {{ $sej11_level->id }}</h1>

    <table class="table table-striped table-sm">
        <tr>
            <td>Peringkat</td>
            <td>Username</td>
            <td>Score</td>
        </tr>
        @foreach ($sej11_user_level as $bisa_yok)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $bisa_yok->user->username }}</td>
                <td>{{ $bisa_yok->score }}</td>
            </tr>
        @endforeach
    </table>
    <div class="d-grid gap-2 mb-3 mx-auto">
        {{-- <button type="button" class="btn btn-outline-primary">Profile</button> --}}
        <a href="/leaderboard_utama" class="btn btn-outline-primary">Leaderboard Utama</a>
    </div>


@endsection
