@extends('layouts.main')

@section('container')

<p>timer</p>
<H1>{{ $sej11_soal[10]->soal }}</H1>

<form action="/quiz/{{ $sej11_soal[10]->sej11_level->id }}/soal11" method="POST" name="soal11">
    @foreach ($sej11_soal[10]->sej11_opsi_isians as $soal_isian)
    <input type="radio" name="opsi_pg">
    <label >{{ $isian->o }}</label><br>
  @endforeach
  <button type="button" class="btn btn-outline-secondary">Submit</button>
  </form>
@endsection