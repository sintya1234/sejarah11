@extends('layouts.main')

@section('container')

<p>timer</p>
<H1>{{ $sej11_soal[14]->soal }}</H1>

<form action="/quiz/{{ $sej11_soal[14]->sej11_level->id }}/soal15" method="POST" name="soal15">
    @foreach ($sej11_soal[14]->sej11_opsi_pilgans as $pg)
    <input type="radio" name="opsi_pg">
    <label >{{ $pg->opsi_pg }}</label><br>
  @endforeach
  <button type="button" class="btn btn-outline-secondary">Submit</button>
  </form>
@endsection