<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Discrimination | {{ $title }}</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../assets/css.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-secondary">
    <div class="navi">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
          <div class="container-fluid">
            <div class="logo">
              <a style="margin-left: 20px" class="navbar-brand" href="/"><b class="text-danger">Discrimi</b><b>nati<img src="../assets/img/diss.png" width="50" alt="dis.jpg">n</b></a>
            </div>
          <button  class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="list">
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link {{ ( $title === 'Home' ) ? 'active' : '' ;}}" aria-current="page" href="/"> Home </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ ( $title === 'Updates' ) ? 'active' : '' ;}}" href="/update">Updates </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ ( $title === 'About' ) ? 'active' : '' ;}}" href="/about">About </a>
                </li>
              </ul>
              
            <span class="navbar-text">
                @auth
                  {{-- <a class="nav-link" href="/signin" style="margin-left: 700px"><i class="fas fa-user-circle"></i> Logout</a> --}}
                  <li class="nav-item dropdown" style="margin-left:700px;">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fas fa-user-circle"></i> Hi, <span class="text-primary"><b>{{ auth()->user()->username }}</b></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item text-black" href="#"><i class="fas fa-user-circle text-primary"></i> Profile</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <form action="/logout" method="post">
                          @csrf
                          <button type="submit" class="dropdown-item text black"><i class="fas fa-times-circle text-danger"></i> Logout</button>
                        </form>
                        {{-- <a class="dropdown-item text-black" href="#"><i class="fas fa-times-circle text-danger"></i> Logout</a> --}}
                      </li>
                    </ul>
                  </li>
                @else
                    <a class="nav-link {{ ( $title === 'Login' ) ? 'active' : '' ;}}" href="/signin" style="margin-left: 700px"><i class="fas fa-user-circle"></i> Login</a>
                @endauth
              </span>
            </div>
          </div>
          </div>
        </nav>
      </div>
      {{-- body form --}}
      <div class="container-fluid w-50 p-3">
        <div class="card shadow mt-5">
            <div class="card-header">
                <h1 class="text-warning text-center mt-3">
                    Edit Event
                </h1>
            </div>
            <div class="card-body">
                <form action="/update/{{ $events->id }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" placeholder="Event" id="nama" class="form-control" name="judul" value="{{ $events->nama }}">
                        <label for="nama">Nama Event</label>
                    
                            
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" placeholder="Deskripsi" id="desk" class="form-control" name="desk" value="{{ $events->deskripsi }}">
                        <label for="desk">Deskripsi</label>
                    
                            
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" placeholder="Tanggal Pelaksanaan" id="apt" class="form-control" name="apt" value="{{ $events->apt }}">
                        <label for="apt">tanggal</label>
                    
                            
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" placeholder="Tempat" id="tmpt" class="form-control" name="tmpt" value="{{ $events->tempt }}">
                        <label for="tmpt">Tempat</label>
                    
                        
                        {{-- old foto --}}
                        <input type="hidden" value="{{ $events->foto }}" name="old">
                    </div>
                    <div class="mb-3">
                        <label for="foto" style="margin-left: 13px">Foto <span><strong class="text-primary">{{ $events->nama }}</strong></span></label>
                        <br>
                            <img src="../assets/img/{{ $events->foto }}" alt="Foto {{ $events->nama }}" width="300px" height="400px">
                        <br> <br>
                        <input type="file" placeholder="Tanggal Pelaksanaan" id="foto" class="form-control" name="foto">
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-warning btn-lg w-25" style="float: right"><i class="fas fa-edit"></i> Save</button>
                        <a href="/update"><button type="button" class="btn btn-secondary btn-lg w-25"><i class="fas fa-backward"></i> Kembali</button></a>
                    </div>
                </form>
            </div>
        </div>
      </div>
    <script src="../assets/bootstrap/js/bootstrap.bundle.js"></script>
    <hr class="text-white">
    <footer>
        <div class="container">
            <div class="container w-50" style="float: left">
                <p class="text-white text-center"><i class="fas fa-globe-asia"></i> <i class="fas fa-instagram"></i>www.discrimination-as-fuck.com</p>
                <p class="text-white text-center"><i class="fab fa-instagram"></i> <i class="fas fa-instagram"></i>@discrimination-band</p>
            </div>
            <div class="container w-50" style="float: right">
               <p class="text-white text-center"><i class="far fa-envelope"></i><i class="fas fa-instagram"></i> discrimination0203@gmail.com</p>
                <p class="text-white text-center"><i class="fab fa-youtube"><i class="fas fa-instagram"></i></i> @discrimination0203</p>
            </div>
            <h6 class="text-body-secondary text-center"> Copyright Disrimination - 2024</h6>
        </div>
    </footer>
</body>
</html>