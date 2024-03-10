@extends('layouts.main')
@include('partials.nav')
@section('content')
    <div class="container">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/img/dis.jpg" width="400" height="500" class="d-block w-100" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="text-danger">Discrimination</h5>
                        <p class="text-danger">Band Discrimination adalah band d-beat punk pertama asal Bandung, beranggotakan Sandi Sebagai Guitar/Lead Vocal, Kemed sebagai Drummer, dan Coki sebagai Bassist/2nd vocal</p>
                    </div>
              </div>
              <div class="carousel-item">
                <img src="assets/img/SD.jpg" width="400" height="500" class="d-block w-100" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="text-danger">Social Distortion</h5>
                        <p class="text-danger">Band asal california Orange County ini merupakan. band dengan genre punk rock, punkabilly, cow punk tersukses di dunia dan merupakan panutan band besar lainnya seperti greenday, Superman Is Dead, maupun rancid
                            Beranggotakan, Mike Ness Sebagai rhytm guitar/vocalist, Johnny wickersham sebagai lead guitarist, dan delgado.Jr Sebagai Drummer.
                        </p>
                    </div>
              </div>
              <div class="carousel-item">
                <img src="assets/img/addict.png" width="400" height="500" class="d-block w-100" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="text-danger">The Addict</h5>
                        <p class="text-danger">Some representative placeholder content for the first slide.</p>
                    </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        <div class="card shadow mb-3 bg-body-secondary">
            <div class="card-body">
                
            </div>
            {{-- <div class="container"> --}}
            <div class="alert alert-warning" role="alert">
                <h4 class="alert-heading">Selamat Datang @auth <span class="text-primary">, {{ auth()->user()->username }}</span> @endauth!</h4>
                <p>di web Discrimination band. Silahkan Menjelajah, happy adventure</p>
                <hr>
                <p class="mb-0">Check Juga beberapa Update terbaru Dari Band Discrimination.</p>
              </div>
            </div>
        {{-- </div> --}}
    </div>
    <div class="container">
        <div class="card shadow mb-3 bg-body-secondary">
            <div class="card-header">
                <h3 class="text-center text-primary"> Deskripsi Band</h3>
            </div>
            <div class="card-body">
                <div class="container w-25" style="float: left">
                    <div class="imek">
                        <img src="assets/img/bandDis.jpg" width="250" height="300" alt="Discrimination">
                    </div>
                </div>
                <div class="container w-75" style="float: right">
                <p><strong>Discrimination</strong> merupakan band d-beat/crust Punk asal Bandung yang Beridiri pada tanggal 8 Desember 2018,
                    band ini terdiri dari beberapa personil Sandi - Mbe Sebagai Guitar/Vocalist, Ahmad Arifin - Kemed Sebagai Drummer, dan Richard Hendrik Sikumbang - Coki Sebagai Bassist/2nd vocal</p>
                <p>
                    terinspirasi berdasarkan band <strong>Discharge, Agnosy, Dishonor, Anticimex, Wolfbrigade</strong> dan juga band <strong>Discrimination</strong> memaknai arti dari orang-orang minority yang selalu tertindas,
                    terintimidasi, tak terdengar dan terlihat oleh kaum-kaum kapitalis. yang melakukan perlawanan melalui teriakan karya musik dengan harapan orang kapitalis sialan dapat
                    mendengar jeritan dan teriakan perlawanan dari mereka. 
                </p>
                <p>
                    Tak lepas dari era kapan DISCRIMINATION berdiri. Kebebasan berekspresi melalui media musik tidak mengubah relativitas setiap era, namun untuk mengungkapkan tautan antara karakter muklat komitmen
                     bebas dan sebagai pengihatan terhadap derita, seperti seseorang diharuskan menginterpretasikan perintah meluncurkan sebuah serangan dan mengantarkan sejumlah manusia pada kematian mereka. 
                </p>
                </div>
            </div>
        </div>
        <div class="card shadow mb-3 bg-body-secondary" style="display: flex;">
            <div class="card-header">
                <h3 class="text-primary text-center">
                    Personil
                </h3>
            </div>
            <div class="card-body">
                <div class="kard" style="justify-content:center; align-items:center; display:flex; margin-left:20px">
                    @foreach($index as $c)
                    <div class="crad">
                    <div class="card shadow" style="margin-right: 50px;"> 
                        <div class="hed">
                            <a href="/{{ $c->slug }}"><img src="assets/img/{{ $c->foto }}" style="" alt="foto {{ $c->nama }}" width="200" height="200" class="thumbnail rounded-circle"></a>
                        </div>
                    <div class="card-body text-center">
                        <div class="bodi">
                            <a href="/{{ $c->slug }}"><h1>{{ $c->panggilan }}</h1></a>
                        <p class="mt-0">{{ $c->role }}</p>
                        </div>
                    </div>
                </div>
                    </div>
                    @endforeach
                    {{-- <div class="card shadow" style="margin-right: 50px;"> 
                        <div class="hed">
                            <a href="/{{  }}"><img src="assets/img/coki.jpg" alt="foto mbe" width="200" height="200" class="thumbnail rounded-circle"></a>
                        </div>
                    <div class="card-body text-center">
                        <div class="bodi">
                            <h1 class="ha1 text-success">Coki</h1>
                            <p class="pe">Bassist/ 2nd Vocalist</p>
                        </div>
                    </div>
                    </div> --}}
                    {{-- <div class="card shadow" style="margin-right: 50px;"> 
                        <div class="hed">
                            <a href=""><img src="assets/img/kemed.jpg" alt="foto mbe" width="200" height="200" class="thumbnail rounded-circle"></a>
                        </div>
                    <div class="card-body text-center" style="float: right">
                        <div class="bodi">
                            <h1 class="ha1 text-success">Kemed</h1>
                            <p class="pe">Drummer</p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection