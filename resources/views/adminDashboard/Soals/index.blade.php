@extends('adminDashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Photos</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif


    <div class="table-responsive col-lg-8">
        <a href="/dashboard/posts/create " class="btn btn-primary mb-3">Create new post</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Level</th>
                    <th scope="col">Soal</th>
                    <th scope="col">Potongan gambar</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($soals as $soal)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $soal->sej11__level_id }}</td>
                        <td>{{ $soal->soal }}</td>
                        <td>{{ $soal->potongan_gambar }}</td>
                        <td>
                            <a href="" class="btn btn-dark"><span
                                    data-feather="eye"></span></a>
                            <a href="" class="btn btn-info"><span data-feather="edit"></span></a>

                            <form action="" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Beneran mau hapus?')">
                                    <span data-feather="x-circle"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
