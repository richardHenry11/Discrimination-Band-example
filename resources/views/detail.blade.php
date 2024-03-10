@extends('layouts.main')
@include('partials.nav')
<div class="mt-5">
@section('content')
<div class="card shadow bg-body-secondary">
    <div class="card-header">
        <div class="shad">
            <h2 class="mt-3 mb-3 text-center">Profile Bio</h2>
        </div>
    </div>
    <div class="card-body">
        <div class="gambar">
            <img src="assets/img/{{ $content->foto }}" width="350" height="400" alt="Foto {{ $content->panggilan }}">
            <p><strong class="text-primary">Nama Lengkap :</strong> {{ $content->nama }}</p>
            <p><strong class="text-primary">Role :</strong> {{ $content->role }}</p>
            <p><strong class="text-primary">Tempat,Tanggal Lahir :</strong> {{ $content->tempat }}, {{ $content->tgl }}</p>
            <div class="margin">
                <p>{{ $content->deskripsi }}</p>
            </div>

            <hr>
            <div class="baten"><a href="/"><button type="button" class="btn btn-danger btn-lg w-50"><i class="fas fa-undo-alt"></i> Back</button></a></div>
        </div>
    </div>
</div>
@endsection
</div>