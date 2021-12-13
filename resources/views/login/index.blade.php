@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-4">


            <main class="form-signin">

                <h1 class="h3 mb-3 fw-normal">Please Login</h1>
                <form action="/login" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('name') is-invalid @enderror" id="email"
                            placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                            required>
                        <label for="password">Password</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

                </form>
                <small class="d-block text-center mt-3">Belum daftar? <a href="/register">Register Now!</a></small>
            </main>
        </div>
    </div>


@endsection
