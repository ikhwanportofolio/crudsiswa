@extends('layouts.default')

@section('content')
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100i,300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

    <section>
        <div class="container mt-5">
            <h1 class="text-center">Form Tambah Siswa</h1>
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
                    <form action="{{ url('store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mt-4">
                            <label for="nama">Nama Siswa *</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap Siswa">
                        </div>
                        <div class="form-group mt-1">
                            <label for="nama">NIK *</label>
                            <input type="number" name="nik" class="form-control" placeholder="Masukkan NIK Siswa">
                        </div>
                        <div class="form-group mt-1">
                            <label for="nama">Kelas *</label>
                            <input type="number" name="kelas" class="form-control" placeholder="Masukkan Kelas Siswa">
                        </div>
                        <div class="form-group mt-1">
                            <label for="nama">Alamat *</label>
                            <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Siswa"></textarea>
                        </div>
                        <div class="form-group mt-1">
                            <label for="nama">Email *</label>
                            <input type="text" name="email" class="form-control" placeholder="Masukkan Email Siswa">
                        </div>
                        <div class="form-group mt-4">
                            <center>
                                <button type="submit" class="btn btn-primary">Tambah Siswa</button>
                                <a class="btn btn-primary" href="{{ url('/') }}">
                                    Kembali Kehalaman Utama </a>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
