@extends('layouts.main')

@section('container')

<script>
  var timeleft = {{ $waktu=$sej11_soal[8]->sej11_waktu->waktu }};
  var soalTimer = setInterval(function(){
    if(timeleft < 0){
      clearInterval(soalTimer);
      document.getElementById("countdown").innerHTML = "go to next page";
    } else {
      document.getElementById("countdown").innerHTML = timeleft + " seconds remaining";
    }
    timeleft -= 1;
  }, 1000);
</script>
<div id="countdown"></div>

<H1>{{ $sej11_soal[8]->soal }}</H1>

<form action="/quiz/{{ $sej11_soal[0]->sej11_level->id }}/soal9" method="POST" name="soal9">
  @csrf
    @foreach ($sej11_soal[8]->sej11_opsi_pilgans as $pg)
  {{--   <input type="radio" name="opsi_pg" value="{{ $pg->opsi_pg }}"> --}}
  {{--   <label >{{ $pg->opsi_pg }}</label><br> --}}
  <div class="input-group mt-3">
    <div class="input-group-text mt-1">
        <input class="form-check-input mt-0" type="radio" name="opsi_pg" value="{{ $pg->opsi_pg }}">
      </div>
    <label class="form-control">{{ $pg->opsi_pg }}</label><br>
</div>
  @endforeach
  <button type="submit" class="btn btn-outline-secondary mt-3">Submit</button>
  </form>
@endsection