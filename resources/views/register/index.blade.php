@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <main class="form-signin">

                <form action="/register" method="post">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal">From Register</h1>

                    <div class="form-floating">
                        <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror"
                            id="name" placeholder="Name" required value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                            id="username" placeholder="Username" required value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="password" name="password"
                            class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password"
                            placeholder="Password" required value="{{ old('password') }}">
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="password" name="password_confirmation"
                            class="form-control rounded-bottom @error('password_confirmation') is-invalid @enderror" id="password_confirmation"
                            placeholder="password_confirmation" required value="{{ old('password_confirmation') }}">
                        <label for="password_confirmation">password confirmation</label>
                        @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="form-floating">
                        <input type="text" name="school"
                            class="form-control rounded-bottom @error('school') is-invalid @enderror" id="school"
                            placeholder="school" required value="{{ old('school') }}">
                        <label for="school">School</label>
                        @error('school')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>



                    <div class="form-floating">
                        <input type="text" name="city"
                            class="form-control rounded-bottom @error('city') is-invalid @enderror" id="city"
                            placeholder="city" required value="{{ old('city') }}">
                        <label for="city">City</label>
                        @error('city')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="form-floating">
                        <input type="text" name="birthyear"
                            class="form-control rounded-bottom @error('birtyear') is-invalid @enderror"
                            id="birthyear" placeholder="birthyear" required value="{{ old('birtyear') }}">
                        <label for="birthyear">birthyear</label>
                        @error('birthyear')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>

                </form>
                <small class="d-block text-center mt-3">sudah pernah daftar? <a href="/login">Login Now!</a></small>
            </main>
        </div>
    </div>


@endsection
