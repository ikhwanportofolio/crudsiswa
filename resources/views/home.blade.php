@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <div class="container mt-3">
            <a href="{{ route('index') }}" class="btn btn-outline-primary">Lanjutkan
                Kehalaman Utama</a>
        </div>
    </div>
@endsection
