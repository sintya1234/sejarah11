@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create new Level</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/levels" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="judul_sub_bab" class="form-label">Judul level (judul Sub bab)</label>
                <input type="text" class="form-control @error('judul_sub_bab') is-invalid @enderror" id="judul_sub_bab"
                    name="judul_sub_bab" required autofocus value="{{ old('judul_sub_bab') }}">
                @error('judul_sub_bab')
                    <div class="invalid-feedback">
                        {{ $message }}
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="gambar_utuh" class="form-label">Link gambar Utuh</label>
                    <input type="text" class="form-control @error('gambar_utuh') is-invalid @enderror" id="gambar_utuh"
                        name="gambar_utuh" required autofocus value="{{ old('gambar_utuh') }}">
                    @error('gambar_utuh')
                        <div class="invalid-feedback">
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="materi" class="form-label">Materi</label>
                        @error('materi')
                            <p class="text-danger"> {{ $message }}</p>
                        @enderror
                        <input id="body" type="hidden" name="materi" value="{{ old('materi') }}">
                        <trix-editor input="materi"></trix-editor>
                    </div>



                    <div class="mb-3">
                        <label for="soal1" class="form-label">
                            Soal nomor 1
                        </label>
                        <input type="text" class="form-control @error('soal1') is-invalid @enderror" id="soal1" name="soal1"
                            required autofocus value="{{ old('soal1') }}">
                        @error('soal1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            @enderror
                        </div>
                        {{-- <a>Opsi pilihan ganda status benar adalah 1 dan status salah adalah 0</a>
                        <div class="mb-3">
                            <label for="pilgan1no1" class="form-label">opsi pilgan 1</label>
                            <input type="text" class="form-control @error('pilgan1no1') is-invalid @enderror" id="pilgan1no1"
                                name="pilgan1no1" required autofocus value="{{ old('pilgan1no1') }}">
                            @error('pilgan1no1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="pilgan1no1" class="form-label">status benar</label>
                                <input type="number" class="form-control @error('pilgan1no1') is-invalid @enderror" id="pilgan1no1"
                                    name="pilgan1no1" required autofocus value="{{ old('pilgan1no1') }}">
                                @error('pilgan1no1')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    @enderror
                                </div>

                            <div class="mb-3">
                                <label for="soal1" class="form-label">opsi pilgan 2</label>
                                <input type="text" class="form-control @error('soal1') is-invalid @enderror" id="soal1"
                                    name="soal1" required autofocus value="{{ old('soal1') }}">
                                @error('soal1')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="soal1" class="form-label">opsi pilgan 3</label>
                                    <input type="text" class="form-control @error('soal1') is-invalid @enderror" id="soal1"
                                        name="soal1" required autofocus value="{{ old('soal1') }}">
                                    @error('soal1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="soal1" class="form-label">opsi pilgan 4</label>
                                        <input type="text" class="form-control @error('soal1') is-invalid @enderror"
                                            id="soal1" name="soal1" required autofocus value="{{ old('soal1') }}">
                                        @error('soal1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="soal1" class="form-label">opsi pilgan 5</label>
                                            <input type="text" class="form-control @error('soal1') is-invalid @enderror"
                                                id="soal1" name="soal1" required autofocus value="{{ old('soal1') }}">
                                            @error('soal1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                @enderror
                                            </div> --}}



                        <div class="mb-3">
                            <label for="soal2" class="form-label">
                                Soal nomor 2
                            </label>
                            <input type="text" class="form-control @error('soal2') is-invalid @enderror" id="soal2"
                                name="soal2" required autofocus value="{{ old('soal2') }}">
                            @error('soal2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="soal3" class="form-label">
                                    Soal nomor 3
                                </label>
                                <input type="text" class="form-control @error('soal3') is-invalid @enderror" id="soal3"
                                    name="soal3" required autofocus value="{{ old('soal3') }}">
                                @error('soal3')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    @enderror
                                </div>


                                <div class="mb-3">
                                    <label for="soal4" class="form-label">
                                        Soal nomor 4
                                    </label>
                                    <input type="text" class="form-control @error('soal4') is-invalid @enderror" id="soal4"
                                        name="soal4" required autofocus value="{{ old('soal4') }}">
                                    @error('soal4')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        @enderror
                                    </div>



                                    <div class="mb-3">
                                        <label for="soal5" class="form-label">
                                            Soal nomor 5
                                        </label>
                                        <input type="text" class="form-control @error('soal5') is-invalid @enderror"
                                            id="soal5" name="soal5" required autofocus value="{{ old('soal5') }}">
                                        @error('soal5')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            @enderror
                                        </div>




                                        <div class="mb-3">
                                            <label for="soal6" class="form-label">
                                                Soal nomor 6
                                            </label>
                                            <input type="text" class="form-control @error('soal6') is-invalid @enderror"
                                                id="soal6" name="soal6" required autofocus value="{{ old('soal6') }}">
                                            @error('soal6')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                @enderror
                                            </div>


                                            <div class="mb-3">
                                                <label for="soal7" class="form-label">
                                                    Soal nomor 7
                                                </label>
                                                <input type="text" class="form-control @error('soal7') is-invalid @enderror"
                                                    id="soal7" name="soal7" required autofocus
                                                    value="{{ old('soal7') }}">
                                                @error('soal7')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    @enderror
                                                </div>



                                                <div class="mb-3">
                                                    <label for="soal8" class="form-label">
                                                        Soal nomor 8
                                                    </label>
                                                    <input type="text"
                                                        class="form-control @error('soal8') is-invalid @enderror" id="soal8"
                                                        name="soal8" required autofocus value="{{ old('soal8') }}">
                                                    @error('soal8')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        @enderror
                                                    </div>



                                                    <div class="mb-3">
                                                        <label for="soal9" class="form-label">
                                                            Soal nomor 9
                                                        </label>
                                                        <input type="text"
                                                            class="form-control @error('soal9') is-invalid @enderror"
                                                            id="soal9" name="soal9" required autofocus
                                                            value="{{ old('soal9') }}">
                                                        @error('soal9')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            @enderror
                                                        </div>


                                                        <div class="mb-3">
                                                            <label for="soal10" class="form-label">
                                                                Soal nomor 10
                                                            </label>
                                                            <input type="text"
                                                                class="form-control @error('soal10') is-invalid @enderror"
                                                                id="soal10" name="soal10" required autofocus
                                                                value="{{ old('soal10') }}">
                                                            @error('soal10')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                @enderror
                                                            </div>



                                                            <button type="submit" class="btn btn-primary">Create
                                                                Level</button>
        </form>
    </div>
    {{-- buat ngilangin tambah file --}}
    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>

@endsection
