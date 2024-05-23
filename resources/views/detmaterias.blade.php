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
            <a href="#" class="dropdown-item ">
            <i class="bi bi-box-arrow-left"></i> Logout
            </a>
          </div>
        </li>
      </ul>
    </div>
    </div>
  </nav>
</header>
  <!-- Esta vista es la que aparece cuando picas en "Ver más" de la vista Materias-->
  <div class="container">
    <div class="row">
      <div class="col-sm-8 d-flex justify-content-center align-items-center">
        <div>
            <h2 class="">Matemáticas Discretas</h2>
            <hr>
            <p class="">Explora el mundo de la lógica, conjuntos, y estructuras algebraicas fundamentales en Matemáticas Discretas. Descubre aplicaciones en informática otras áreas y resuelve problemas con precisión y rigor.</p>   
            
            <!-- Button modal -->
            <button type="button" class="btn-estilo" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agendarModal">Agendar Sesión</button>

            <!-- Modal -->
            <div class="modal fade" id="agendarModal" tabindex="-1" aria-labelledby="agendarModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title fs-5" id="agendarModalLabel">Agendar Sesión</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" style="border:none; background-color: #FFFFFF;" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                        </div>
                        <div class="modal-body">
                            ¡Recuerda que solo puedes agendar sesiones dentro de la disponibilidad del tutor!
                            <div class="mb-3" id="fecha">
                            <input class="disponibilidad" type="datetime-local">
                            </div>    
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn-estilo" name="agendar">Agendar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Acaba el Modal -->
        </div>
      </div>

      <!-- Aqui empieza la información del tutor -->
      <div class="col-sm-4 d-flex justify-content-center align-items-center">
        <div class="profile-widget-header text-center">
            <h5 class="info-tutor">Tutor</h5><hr>
            <img alt="image" src="images/t1.jpg" class="rounded-circle profile-widget-picture">
            <hr>
            
            <h5 class="info-tutor">Fabiola Elena Dominguez Valencia</h5><hr>
            <p class="info-tutor">Calificación: 3.87
                <i class="bi bi-star-fill star"></i>
            </p>     
            <p class="info-tutor">Grado académico</p>
            <p class="info-tutor">Experto en Matemáticas Discretas con enfoque práctico y didáctico. ¡Aprende conmigo y domina los conceptos clave!</p>
        </div>
      </div>
    </div>
  </div>

</section>
@endsection
