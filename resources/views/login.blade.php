<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Discrimination | {{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fotawesome/css/all.min.css') }}">
</head>
<body class="bg-secondary">
     {{-- alert regist success --}}
     @if(session()->has('success'))
     <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
         {{ session('success') }}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>
     @endif

     {{-- alert Login Errors --}}
     @if(session()->has('loginErr'))
     <div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
         {{ session('loginErr') }}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>
     @endif
    <div class="container" style="margin-left: 400px">
    <div class="card shadow mt-5 w-50 bg-body-secondary">
        <div class="card-header">
            <h1 class="text-primary text-center">
                Login
            </h1>
        </div>
        <div class="card-body">
            <form action="/signin" method="post">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" name="username" id="username" placeholder="Example" class="form-control @error('username') is-invalid @enderror" autofocus required value="{{ old('username') }}">
                    <label for="username">Masukan Username</label>
                    @error('username')
                        {{ $message }}
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password" id="password" placeholder="Example" class="form-control" required>
                    <label for="password">Password</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Remember Me</label>
                </div>
                <br>
                <button type="submit" name="login" class="btn btn-success btn-lg w-50"> Login</button>
                <a href="/regist"><button type="button" class="btn btn-primary btn-lg w-50" style="float: left"> Registrasi</button></a>
            </form>
        </div>
    </div>
</div>
    <br>
    <script src="{{ asset('assets/bootstrap.js.bootstrap.bundle.js') }}"></script>
    <hr>
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