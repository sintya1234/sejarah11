@extends('layouts.main')

@section('container')

<p>timer</p>
<H1>{{ $sej11_soal[8]->soal }}</H1>

<form action="/quiz/{{ $sej11_soal[8]->sej11_level->id }}/soal9" method="POST" name="soal9">
  @csrf
    @foreach ($sej11_soal[8]->sej11_opsi_pilgans as $pg)
    <input type="radio" name="opsi_pg">
    <label >{{ $pg->opsi_pg }}</label><br>
  @endforeach
  <button type="submit" class="btn btn-outline-secondary">Submit</button>
  </form>
@endsection