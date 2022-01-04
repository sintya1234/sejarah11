@extends('layouts.main')

@section('container')

    <p>timer</p>
    <H1>{{ $sej11_soal[0]->soal }}</H1>

    <form action="/quiz/{{ $sej11_soal[0]->sej11_levels->id }}/soal1" method="post">
      @csrf
        @foreach ($sej11_soal[0]->sej11_opsi_pilgans as $pg)
            <input type="radio" name="opsi_pg">
            <label>{{ $pg->opsi_pg }}</label><br>
        @endforeach
        <button type="submit" class="btn btn-outline-secondary">Submit</button>
    </form>
@endsection
