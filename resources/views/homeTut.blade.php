@extends('layout.inho2')
@section('title','Brightmind')
@section('content')
<body oncontextmenu='return false' class='snippet-body'>
<section class="home">
<header>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-secondary" type="submit">
            <i class="bi bi-search"></i>
          </button>
      </form>
      <ul class="navbar-nav ms-auto">
      <li class="nav-item dropdown">
          <a href="#" class="nav-link" role="button" data-bs-toggle="dropdown">
            <i class="bi bi-bell-fill icono-grande"></i>
          </a>
          
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link" role="button" data-bs-toggle="dropdown">
            <i class="bi bi-envelope-fill icono-grande"></i>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">
          <img alt="image" src="{{ $tutor->foto ?? 'images/t1.jpg' }}" class="rounded-circle mr-1">
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a href="{{route('perfilt')}}" class="dropdown-item">
            <i class="bi bi-person-fill"></i> Perfil
            </a>
            <div class="dropdown-divider"></div>
            <a href="{{route('index')}}" class="dropdown-item ">
            <i class="bi bi-box-arrow-left"></i> Logout
            </a>
          </div>
        </li>
      </ul>
    </div>
</div>
  </nav>
</header>
<div class="welcome">
  <div class="overlay">
    <h1>¡Bienvenido a Brightmind Tutor!</h1><img src="images/Home.png" class="welcome" alt="Tutor Photo" style="heigh:70%; width:60%">
  </div>
</div>
<br><br>
<div class="container">
        <div class="row">
            <div class="col-6">
                <h3 class="mb-3">Sesiones</h3>
            </div>
            <div class="col-6 text-right">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="bi bi-arrow-left"></i>
                </a>
                <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                            @foreach ($sesiones as $sesion)
                               <!-- empieza la card -->
                               @if ($sesion->estado==1)
                                <div class="col-md-4 mb-3"> 
                                          <div class="card card-body">
                                              <h5 class="card-title">{{$sesion->materia->Nombre}}</h5>
                                              <p class="card-text"><i class="bi bi-person-circle" style="font-size: 3rem;"></i> Estudiante: {{$sesion->estudiantes->nombre}}</p>
                                              <p class="card-text">Fecha: {{$sesion->fecha->isoFormat('dddd, D [de] MMMM [de] YYYY')}}</p>
                                              
                                          </div>
                                  </div>
                               @endif
                                
                              <!-- termina la card -->
                              @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type='text/javascript'></script>
</body>
</section>
    
@endsection