@extends('layouts.default')

@section('content')
    <div class="container mt-3">
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <button class=" btn btn-outline-danger" class="text-center"
                onclick="return confirm('Apa Anda Yakin Mau Keluar?');">Logout</button>
        </form>
    </div>
    <section>
        <div class="container mt-4">
            <div class="col-lg-12">
                <center>
                    <h1>DATA SISWA</h1>
                </center>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>

        @endif


        <div class="container mt-4 ">
            <div class="col-lg-12">
                <table class="table table-striped table-bordered border-dark" align="center" width="100%">
                    <tr class="text-center">
                        <th width="3%">No</th>
                        <th width="16%">Nama</th>
                        <th width="9%">NIK</th>
                        <th width="3%">Kelas</th>
                        <th width="19%">Alamat</th>
                        <th width="19%">Email</th>
                        <th width="50%">Action</th>
                    </tr>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($data as $dataSis)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $dataSis->nama }}</td>
                            <td>{{ $dataSis->nik }}</td>
                            <td>{{ $dataSis->kelas }}</td>
                            <td>{{ $dataSis->alamat }}</td>
                            <td>{{ $dataSis->email }}</td>
                            <td>
                                <center>
                                    <a href="{{ url('/show/' . $dataSis->id) }}" class="btn btn-outline-primary">Show</a>
                                    <a href="{{ url('/edit/' . $dataSis->id) }}" class="btn btn-outline-warning">Edit</a>
                                    <a href="{{ url('/destroy/' . $dataSis->id) }}"
                                        onclick="return confirm('Apa Anda Yakin Untuk Menghapus Data Ini?');"
                                        class=" btn btn-outline-danger">Delete</a>
                                </center>
                            </td>
                        </tr>
                    @endforeach
                </table>
                </table>
            </div>
            <div class="d-grid gap-2">
                <a href="{{ route('create') }}" class="btn btn-secondary" class="text-center">Tambah Data
                    Siswa</a>
            </div>
    </section>

@endsection
