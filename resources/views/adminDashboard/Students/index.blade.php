@extends('adminDashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Students</h1>
    </div>
    <div class="table-responsive col-lg-8">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Student</th>
                    <th scope="col">Username</th>
                    <th scope="col">Action</th>
                    <th scope="col">School</th>
                    <th scope="col">City</th>
                    <th scope="col">birthyear</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->username }}</td>
                        <td>{{ $student->school }}</td>
                        <td>{{ $student->city }}</td>
                        <td>{{ $student->birthyear }}</td>
                        <td>{{ $student->photo }}</td>
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
