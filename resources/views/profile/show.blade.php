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

    {{-- <a href="/profile/edit" class="btn btn-info"><span data-feather="edit"></span></a> --}}

    {{-- https://www.bootdey.com/snippets/view/profile-with-data-and-skills#html --}}
    <div class="container">
        <div class="main-body">

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    {{-- <li class="breadcrumb-item"><a href="index.html">Home</a></li> --}}
                    {{-- <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li> --}}
                    <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
            </nav>

            @if (session()->has('success'))
                <div class="alert alert-success col-lg-8" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <!-- /Breadcrumb -->

            <div class="row gutters-sm">

                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                    class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4> {{ auth()->user()->username }}</h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Name: </h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ auth()->user()->name }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Username: </h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ auth()->user()->username }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email: </h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ auth()->user()->email }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">City: </h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ auth()->user()->city }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">School: </h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ auth()->user()->school }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Birthyear: </h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ auth()->user()->birthyear }}
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-12">
                                    {{-- <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a> --}}
                                    <a href="/profile/{{ auth()->user()->id }}/edit" class="btn btn-info"><span
                                            data-feather="edit"></span>Edit</a>

                                </div>
                            </div>
                        </div>
                    </div>




                </div>
            </div>

        </div>
    </div>
@endsection
