@extends('layouts.main')

@section('container')

<p>timer</p>
<H1>{{ $sej11_soal[11]->soal }}</H1>

<form action="/quiz/{{ $sej11_soal[0]->sej11_level->id }}/soal12" method="POST" name="soal12">
  @csrf
    @foreach ($sej11_soal[11]->sej11_opsi_pilgans as $pg)
    <input type="radio" name="opsi_pg" value="{{ $pg->opsi_pg }}">
    <label >{{ $pg->opsi_pg }}</label><br>
  @endforeach
  <button type="submit" class="btn btn-outline-secondary">Submit</button>
  </form>
@endsection