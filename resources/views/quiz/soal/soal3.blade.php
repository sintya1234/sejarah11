@extends('layouts.main')

@section('container')

<p>timer</p>
<H1>{{ $sej11_soal[2]->soal }}</H1>

<form action="/quiz/{{ $sej11_soal[2]->sej11_level->id }}/soal3" method="POST" name="soal3">
    @foreach ($sej11_soal[2]->sej11_opsi_pilgans as $pg)
    <input type="radio" name="opsi_pg">
    <label >{{ $pg->opsi_pg }}</label><br>
  @endforeach
  <button type="button" class="btn btn-outline-secondary">Submit</button>
  </form>
@endsection