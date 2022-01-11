@extends('layouts.main')
@section('container')

{{-- <<<<<<< HEAD --}}
<div class="d-grid gap-2 mb-3 rowmx-auto">
    <a href="/quiz" class="btn btn-outline-danger">Quiz</a>
</div>

<div class="d-grid gap-2 mb-3 mx-auto">
    {{-- <button type="button" ></button> --}}
    <a href="/kumpulan-materi" class="btn btn-outline-warning">Baca Materi</a>
</div>
<div class="d-grid gap-2 mb-3 mx-auto">
    <button href="/leaderbord_utama" type="button" class="btn btn-outline-success">Leaderboard</button>
</div>
<div class="d-grid gap-2 mb-3 mx-auto">
    {{-- <button type="button" class="btn btn-outline-primary">Profile</button> --}}
    <a href="/profile" class="btn btn-outline-primary">Profile</a>
</div>




@endsection

{{-- https://getbootstrap.com/docs/3.4/components/#navbar --}}
{{-- belum selesai nanti ku perbaiki --}}
