@extends('layouts.main')
@include('partials.nav')
@section('content')
<div class="container mt-5 justify-content-center">
    <div class="card shadow mt-5 bg-body-secondary">
        <div class="card-header">
            <h1 class="text-primary text-center">Add Events</h1>
        </div>
        <div class="card-body mt-5">
            <form action="/add" method="post">
                    @csrf
                <div class="form-floating mb-3">
                    <input type="text" placeholder="Event" id="nama" class="form-control @error('nama') is-invalid  @enderror" name="nama" value="{{ old('nama') }}" required>
                    <label for="nama">Nama Event</label>
                    @error('nama')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" placeholder="Deskripsi" id="desk" class="form-control @error('deskripsi') is-invalid  @enderror" name="deskripsi" value="{{ old('deskripsi') }}" required>
                    <label for="desk">Deskripsi</label>
                    @error('deskripsi')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" placeholder="Tanggal Pelaksanaan" id="tgl" class="form-control @error('apt') is-invalid  @enderror" name="apt" value="{{ old('apt') }}" required>
                    <label for="tgl">tanggal</label>
                    @error('apt')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" placeholder="Tempat" id="tmpt" class="form-control @error('tempt') is-invalid  @enderror" name="tempt" value="{{ old('tempt') }}" required>
                    <label for="tmpt">Tempat</label>
                    @error('tempt')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="foto" class="text-primary" style="margin-left: 13px">Foto Poster</label>
                    <input type="file" placeholder="Tanggal Pelaksanaan" id="foto" class="form-control" name="foto">
                </div>
                    <a href="/update"><button type="button" style="float: left" class="btn btn-danger mb-3 w-25" data-bs-dismiss="modal"><i class="fas fa-times"></i> Close</button></a>
                    <button type="submit" class="btn btn-success mb-3 w-25" style="float: right"><i class="fas fa-plus"></i> Tambah</button>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection