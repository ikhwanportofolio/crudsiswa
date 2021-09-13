@extends('layouts.default')

@section('content')
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100i,300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

    <section>
        <div class="row">
            <div class="col-lg-12 mt-3">
                <div class="col-lg-12 text-center">
                    <div class="pull-left">
                        <h2>Data Siswa</h2>
                    </div>
                    <table class="table table-light table-striped">
                        <tr class="text-center">
                            <th width="3%">No</th>
                            <th width="16%">Nama</th>
                            <th width="9%">NIK</th>
                            <th width="3%">Kelas</th>
                            <th width="24%">Alamat</th>
                            <th width="19%">Email</th>
                            <th width="50%">Action</th>
                        </tr>
                        @php
                            $i = 1;
                        @endphp

                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->nik }}</td>
                            <td>{{ $data->kelas }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>{{ $data->email }}</td>
                            <td>
                                <center>
                                    <a href="{{ url('/show/' . $data->id) }}" class="btn btn-outline-primary">Show</a>
                                    <a href="{{ url('/edit/' . $data->id) }}" class="btn btn-outline-warning">Edit</a>
                                    <a href="{{ url('/destroy/' . $data->id) }}"
                                        onclick="return confirm('Apa Anda Yakin Untuk Menghapus Data Ini?');"
                                        class=" btn btn-outline-danger">Delete</a>
                                </center>
                            </td>
                        </tr>

                    </table>
                    <div class="d-grid gap-2">
                        <a class=" btn btn-outline-secondary" href="{{ route('index') }}">KEMBALI</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
