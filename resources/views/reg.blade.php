@extends('layouts.main')
@section('content')

<div class="card shadow w-70 mt-5">
    <div class="card-header">
        <h1 class="text-center text-primary">
            Registration
        </h1>
        <div class="card-body">
            <form action="/regist" method="post">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" name="username" id="username" required value="{{ old('username') }}" class="form-control @error('username') is-invalid @enderror" placeholder="Masukan Username">
                    <label for="username"> Masukan Username</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="email" name="email" id="email" required value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Masukan email">
                    <label for="email"> Email</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukan password" required>
                    <label for="password"> Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password2" id="password2" class="form-control @error('password2') is-invalid @enderror" placeholder="Masukan password2" required>
                    <label for="password2"> Confirm Password</label>
                        @error('password2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                @enderror
                </div>

                <button type="submit" class="btn btn-success btn-lg w-25" style="float: right" name="regist">Regist</button>
                <a href="/signin"><button type="button" class="btn btn-primary btn-lg w-25" style="float: left">Login</button></a>
            </form>
        </div>
    </div>
</div>
@endsection