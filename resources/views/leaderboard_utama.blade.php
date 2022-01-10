@extends('layouts.main')
@section('container')

<h1>Leaderboard Global</h1>

    <table class="table table-striped table-sm">
        <tr>
            <td>Peringkat</td>
             <td>Username</td> 
            {{-- <td>Mencapai level</td> --}}
            <td>Total Score</td>
        </tr>
        @foreach ($sej11_Leaderboards as $sej11_Leaderboard)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $sej11_Leaderboard->user->username }}</td> 
                {{-- <td>{{ $sej11_Leaderboard->user->Sej11_User_Levels->max('sej11__level_id') }}</td> --}}
                <td>{{ $sej11_Leaderboard->total_skor }}</td>
            </tr>
        @endforeach
    </table>
    

@endsection