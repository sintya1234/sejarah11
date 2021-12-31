@extends('layouts.main')

@section('container')
<h1>my profile<h1>
{{-- nntii dikasih foto --}}
<h3>Name: {{ auth()->user()->name }}</h3>
<h3>Username: {{ auth()->user()->username }}</h3>
<h3>email: {{auth()->user()->email}}</h3>
<h3>City: {{ auth()->user()->city}}</h3>
<h3>school: {{  auth()->user()->city}}</h3>
<h3>birthyear: {{auth()->user()->city}}</h3>

<a href="/profile/edit" class="btn btn-info"><span data-feather="edit"></span></a>
@endsection