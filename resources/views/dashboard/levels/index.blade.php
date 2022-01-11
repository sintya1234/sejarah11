@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Level</h1>
    </div>
    @if (session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
    </div>
@endif

    <div class="table-responsive col-lg-8">
        <a href="/dashboard/levels/create " class="btn btn-primary mb-3">Create new level</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">Level</th>
                    <th scope="col">Judul Materi</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sej11_levels as $sej11_level)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $sej11_level->judul_sub_bab }}</td>    
                        <td>
                            
                            <a href="/dashboard/levels/{{ $sej11_level->id }}" class="btn btn-dark"><span
                                    data-feather="eye"></span></a>
                            <a href="/dashboard/levels/{{ $sej11_level->id }}/edit" class="btn btn-info"><span data-feather="edit"></span></a>    
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
