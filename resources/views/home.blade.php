@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="text-center">Welcome to Our Player Management System</h2>
                    </div>
                    <div class="card-body">
                        <img src="{{ asset('vbplr.png') }}" alt="Player Management System" class="img-fluid mx-auto d-block mb-4" style="max-width: 300px;">
                        <p class="text-center">Manage your players efficiently with our easy-to-use system.</p>
                        <div class="text-center">
                            <a href="{{ route('players.index') }}" class="btn btn-primary btn-lg mr-3">View Players</a>
                            <a href="{{ route('players.pdf') }}" class="btn btn-success btn-lg">Export PDF</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
