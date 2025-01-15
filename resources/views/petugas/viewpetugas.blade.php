@extends('template.view')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Detail Petugas</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
 
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Edit data
            </div>
            <div class="card-body">
                <form action="{{ route('petugas.update', $id_petugas->id_petugas) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="harga_beli">Id:</label>
                        <input type="text" class="form-control @error('id_petugas') is-invalid @enderror" id="id_petugas" name="id_petugas" value="{{ $id_petugas->id_petugas }}" disabled>
                        @error('id_petugas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Username:</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ $id_petugas->username }}" disabled>
                        @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis">Nama:</label>
                        <input type="text" class="form-control @error('nama_petugas') is-invalid @enderror" id="nama_petugas" name="nama_petugas" value="{{ $id_petugas->nama_petugas  }}" disabled="">
                        @error('nama_petugas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga_jual">Role:</label>
                        <input type="text" class="form-control @error('level') is-invalid @enderror" id="level" name="level" value="{{  $id_petugas->level }} " disabled>
                        @error('level')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga_jual">Dibuat tanggal:</label>
                        <input type="text" class="form-control @error('created_at') is-invalid @enderror" id="created_at" name="created_at" value="{{  $id_petugas->created_at }} " disabled>
                        @error('created_at')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <a href="{{ url()->previous() }}" class="btn btn-secondary mt-4">Kembali</a>
                </form> 
            </div>
        </div>
    </div>
@endsection