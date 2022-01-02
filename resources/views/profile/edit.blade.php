@extends('layouts.main')
@section('container')

    {{-- <h1>my profile<h1>
{{-- nntii dikasih foto --}}
    {{-- <h3>Name: {{ auth()->user()->name }}</h3> --}}
    {{-- <h3>Username: {{ auth()->user()->username }}</h3> --}}
    {{-- <h3>email: {{auth()->user()->email}}</h3> --}}
    {{-- <h3>City: {{ auth()->user()->city}}</h3> --}}
    {{-- <h3>school: {{  auth()->user()->school}}</h3> --}}
    {{-- <h3>birthyear: {{auth()->user()->birthyear}}</h3> --}}

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Profile</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/profile/{{ auth()->user()->id }}" class="mb-5">
            {{-- ost-ost-">postkepostdikebungmasukkes --}}
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required
                    autofocus value="{{ old('name', auth()->user()->name) }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    @enderror
                </div>
            </div>


            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                    name="username" required value="{{ old('username', auth()->user()->username) }}">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                    required value="{{ old('email', auth()->user()->email) }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" required
                    value="{{ old('city', auth()->user()->city) }}">
                @error('city')
                    <div class="invalid-feedback">
                        {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="school" class="form-label">School</label>
                <input type="text" class="form-control @error('school') is-invalid @enderror" id="school" name="school"
                    required value="{{ old('school', auth()->user()->school) }}">
                @error('school')
                    <div class="invalid-feedback">
                        {{ $message }}
                    @enderror
                </div>
            </div>


            <div class="mb-3">
                <label for="birthyear" class="form-label">Birthyear</label>
                <input type="text" class="form-control @error('birthyear') is-invalid @enderror" id="birthyear"
                    name="birthyear" required value="{{ old('birthyear', auth()->user()->birthyear) }}">
                @error('birthyear')
                    <div class="invalid-feedback">
                        {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                    name="password" required value="{{ old('password', auth()->user()->password) }}">
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    @enderror
                </div>
            </div>
    </div>
    <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
    </div>
@endsection
