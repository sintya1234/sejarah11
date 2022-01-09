@extends('layouts.main')

@section('container')

    <p>timer</p>


    <H1>{{ $sej11_soal[0]->soal }}</H1>

    <form action="/quiz/{{ $sej11_soal[0]->sej11_level->id }}/soal1" method="POST" name="soal1">
      @csrf
      
        @foreach ($sej11_soal[0]->sej11_opsi_pilgans as $pg)
            {{-- <input type="radio" name="opsi_pg" value="{{ $pg->opsi_pg }}"> --}}
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
