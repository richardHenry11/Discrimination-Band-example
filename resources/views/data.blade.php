@extends('layouts.main')
@include('partials.nav')
@section('content')
    <div class="card shadow mt-5 bg-body-secondary">
        <div class="card-header">
            <h3 class="text-primary text-center">Tracks</h3>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                
                <form class="d-flex col-md-6" role="search" >
                    <input  name="keyword" class="form-control me-2" size="100px" type="search" placeholder="Search Songs" value="{{ request('keyword') }}" aria-label="Search">
                    <?php if(isset($_GET['search'])) : ?>
                        <a href="/update"><button type="button" class="btn btn-danger btn-lg"><i class="fas fa-times"></i></button></a>
                    <?php endif ?>
                    <button name="search" class="btn btn-success" type="submit">Search</button>
                  </form>
                </div>
                
                {{-- tracks search--}}
                @if($tracks->count())
            <table class="table table-striped mt-3 mb-3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Songs</th>
                        <th>Cover</th>
                        <th>Duration</th>
                        <th>Published</th>
                    </tr>
                </thead>
                @php
                    $i =1;
                @endphp
                @foreach($tracks as $t)
                <tbody>
                    <tr>
                        <th>{{ $i++ }}</th>
                        <td><h6 class="text-primary">{{ $t->song }}</h6></td>
                        <td><img src="assets/img/{{ $t->cover }}" width="75" height="95" alt="Foto {{ $t->song }}"></td>
                        <td >{{ $t->durasi }} Min</td>
                        <td>{{ $t->year }}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>

            {{-- Pagination Cara Kuno --}}

            {{-- <nav aria-label="...">
                <ul class="pagination justify-content-center">
                  <li class="page-item">
                    <span class="page-link">Previous</span>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item active" aria-current="page">
                    <span class="page-link">2</span>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="/update?">Next</a>
                  </li>
                </ul>
              </nav> --}}

              {{-- Pagination Teknik Laravel --}}
                <div class="d-flex justify-content-center">
                    {{ $tracks->links() }}
                </div>
        </div>
        @else
        <div class="row justify-content-center">
            <div class="alert alert-danger col-md-5" style="display: flex" role="alert">
                <i class="fas fa-exclamation-triangle"></i> <strong><p style="margin-bottom: -4px;margin-left:50px;">No Songs Found!</p></strong>
            </div>
        </div>
    @endif
    </div>

    {{-- ALBUMS --}}
    <div class="card shadows mt-3 bg-body-secondary">
        <div class="card-header">
            <h3 class="text-primary text-center">Albums & Mini Albums</h3>
        </div>
        @foreach($albums as $a)
        <div class="card-body">
            <div class="nyoba">
                {{-- album 1 --}}
                <img src="assets/img/{{ $a->cover }}" class="w-25" alt="">
                <h5 class="text-primary">Nama Album : <span class="text-black">{{ $a->album }}</span></h5> <hr>
                <h5 class="text-primary">Tahun release : <span class="text-black">{{ $a->year }}</span></h5><hr>
                <h5 class="text-primary">Deskripsi : </h5>
                <p>{{ $a->deskripsi }}</p>
            </div>            
        </div> <hr>
        @endforeach
    </div>

    {{-- EVENTS --}}
    <div class="card shadow bg-body-secondary mt-3">
        <div class="card-header">
            <h3 class="text-primary text-center">
                Events
            </h3>
        </div>
        <div class="card-body">
            {{-- @foreach() --}}
            <div style="display: flex; justify-content:center;">
                @foreach($events as $e)
                <div class="card shadow w-25" style="margin-left: 50px;">
                    <div class="card-body">
                            <div class="w-25" style="float: left">
                                <img src="assets/img/{{ $e->foto }}" width="100" height="150" alt="Event {{ $e->nama }}">
                                <p>On, <small class="text-primary"><strong>{{ $e->apt }}</strong></small></p>
                            </div>
                            <div class="w-50" style="float: right">
                                <h4 class="text-primary text-center">{{ $e->nama }}</h4><hr>
                                <p>{{ $e->deskripsi }}</p></td>
                            </div>
                        {{-- <table class="table">
                            <tr>
                                <td><img src="assets/img/{{ $e->foto }}" width="100" height="150" alt="Event Foto"></td>
                                <td><h4 class="text-primary">{{ $e->nama }}</h4>
                                    <br>
                                    <p>{{ $e->deskripsi }}</p></td>
                            </tr>
                        </table> --}}
                    </div>
                    <div class="card-footer">
                        {{-- <a href="/editForm?id={{ $e->id }}"><button type="button" class="btn btn-warning"><i class="fas fa-edit"></i> edit</button></a> --}}
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5 text-warning" id="staticBackdropLabel">Edit Events</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-floating mb-3">
                                        <input type="text" placeholder="Event" id="nama" class="form-control" name="judul" value="{{ $e->nama }}">
                                        <label for="nama">Nama Event</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" placeholder="Deskripsi" id="desk" class="form-control" name="desk" value="{{ $e->deskripsi }}">
                                        <label for="desk">Deskripsi</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" placeholder="Tanggal Pelaksanaan" id="tgl" class="form-control" name="tgl" value="{{ $e->apt }}">
                                        <label for="tgl">tanggal</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" placeholder="Tempat" id="tmpt" class="form-control" name="tmpt" value="{{ $e->tempt }}">
                                        <label for="tmpt">Tempat</label>
                                    </div>
                                    <div class="mb-3">
                                        <label for="foto">Foto Poster</label>
                                        <input type="file" placeholder="Tanggal Pelaksanaan" id="foto" class="form-control" name="foto">
                                    </div>
                                </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-backward"></i> Cancel</button>
                                <button type="button" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    {{-- Delete Event --}}
                    <form action="{{ route('data.delete', ['id' => $e->id]) }}" method="post" class="d-inline">    
                        @csrf
                        @method('DELETE')
                        <button style="float: right" type="submit" name="delete" class="btn btn-danger mt-0" onclick="return confirm('Apakah anda yakin Ingin menghapus event?');"><i class="fas fa-trash"></i> delete</button>
                    </form>
                </div>
                </div>
                @endforeach
            </div>
            <!-- Button trigger modal -->
<button type="button" class="btn btn-success btn-lg" style="float: right" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
{{-- <a href="/add"><button type="button" class="btn btn-success btn-lg"> --}}
    <i class="fas fa-plus-circle"></i> Add
</button></a>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-success text-center" id="staticBackdropLabel">Tambah Event</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/update" method="post" enctype="multipart/form-data">
                @csrf
            <div class="form-floating mb-3">
                <input type="text" placeholder="Event" id="nama" class="form-control" name="nama" required>
                <label for="nama">Nama Event</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" placeholder="Deskripsi" id="desk" class="form-control" name="deskripsi" required>
                <label for="desk">Deskripsi</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" placeholder="Tanggal Pelaksanaan" id="tgl" class="form-control" name="apt" required>
                <label for="tgl">tanggal</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" placeholder="Tempat" id="tmpt" class="form-control" name="tempt" required>
                <label for="tmpt">Tempat</label>
            </div>
            <div class="mb-3">
                <label for="foto">Foto Poster</label>
                <input type="file" placeholder="Tanggal Pelaksanaan" id="foto" class="form-control" name="foto" required>
                @error('foto')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Close</button>
          <button type="submit" class="btn btn-success"><i class="fas fa-plus"></i> Tambah</button>
        </div>
    </form>
      </div>
    </div>
  </div>
            {{-- <a href="/addForm"><button type="button" class="btn btn-success btn-lg" style="float: right"><i class="fas fa-plus-circle"></i> Add</button></a>             --}}
            {{-- @endforeach --}}
        </div>
    </div>
@endsection