@extends('layouts.main')

@section('container')

    <h1> Quiz Level anda </h1>


    <table class="table table-striped table-sm">

        @foreach ($sej11_level as $level)
  
            <tr>
                <td>Level: {{ $loop->iteration }}</td>
                <td>{{ $level->judul_sub_bab }}</td>
                {{-- @if ($loop->first) --}}
                    <td> <a href="/quiz/{{ $level->id }}"><button type="button"
                                class="btn btn-secondary">play</button></a></td>
                {{-- @else
                    <td>terkunci</td> --}}
                {{-- @endif --}}
            </tr>
        @endforeach
    </table>
@endsection
