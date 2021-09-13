@extends('layouts.default')

@section('content')
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100i,300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

    <section>
        <div class="container mt-5">
            <h1 class="text-center">Form Edit Data Siswa</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ url('/update/' . $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mt-4">
                            <label for="nama">Nama Siswa *</label>
                            <input type="text" name="nama" class="form-control" {{ $data->nama }} placeholder="Nama"
                                value="{{ $data->nama }}">

                        </div>
                        <div class="form-group mt-1">
                            <label for="nama">NIK * </label>
                            <input type="number" name="nik" class="form-control" placeholder="NIK"
                                value="{{ $data->nik }}">
                        </div>
                        <div class="form-group mt-1">
                            <label for="nama">Kelas * </label>
                            <input type="number" name="kelas" class="form-control" placeholder="kelas"
                                value="{{ $data->kelas }}">
                        </div>
                        <div class="form-group mt-1">
                            <label for="nama">Alamat *</label>
                            <textarea class="form-control" name="alamat"
                                placeholder="Alamat">{{ $data->alamat }}</textarea>
                        </div>
                        <div class=" form-group mt-4">
                            <label for="nama">Email *</label>
                            <input type="text" name="email" class="form-control" placeholder="Email"
                                value="{{ $data->email }}">
                        </div>
                        <div class="vstack gap-2 col-md-5 mx-auto mt-3">
                            <button type="submit" class="btn btn-secondary"
                                onclick="return confirm('Apa Anda Yakin Untuk Mengedit Data Ini?');">Save changes</button>
                            <a href="{{ route('index') }}" class="btn btn-outline-secondary">Cancel</a>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
