<div class="navi">
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
      <div class="logo">
        <a style="margin-left: 20px" class="navbar-brand" href="/"><b class="text-danger">Discrimi</b><b>nati<img src="assets/img/diss.png" width="50" alt="dis.jpg">n</b></a>
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