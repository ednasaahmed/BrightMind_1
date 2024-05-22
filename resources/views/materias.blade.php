@extends('layout.inmat')
@section('title','Brightmind')
@section('content')
<section class="home" style="margin-bottom:15px;">
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
          <i class="bi bi-person-circle icono-grande"></i>{{ $estudiante->nombre }}
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a href="{{route('perfila')}}" class="dropdown-item">
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


    <div class="materias"> 
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col-3">
                                    <img src="images/t1.jpg" class="card-img-top rounded-circle foto-tutor" alt="Tutor Foto">
                                </div>
                                <div class="col-9">
                                    <p class="c-text"><strong>Tutor</strong></p>
                                    <p class="c-text">Fabiola Elena Dominguez</p>
                                    <p class="c-text">4.8
                                        <i class="bi bi-star-fill star"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <p class="c-title text-center">Matemáticas discretas</p>
                            <p class="c-text text-center">Explora el mundo de la lógica, conjuntos, y estructuras algebraicas fundamentales en Matemáticas Discretas. Descubre aplicaciones en informática otras áreas y resuelve problemas con precisión y rigor.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{route('detmaterias')}}" class="c-link">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>



    
@endsection

