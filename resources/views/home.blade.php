@extends('layouts.app')

@section('content')

<div class="container page">
    <div class="header" style="display: flex;justify-content: space-between; align-items: center; margin: 20px 0;">
            <div class="header-indicator">
                <p class="h5"><i class="fas fa-home"></i> Halaman Utama</p>
            </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><i class="fas fa-tachometer-alt"></i> Navigasi Menu</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ url('jurusan') }}" class="btn btn-success">Jurusan</a>
                    <a href="{{ url('kelas') }}" class="btn btn-success">Kelas</a>
                    <a href="{{ url('siswa') }}" class="btn btn-success">Siswa</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
