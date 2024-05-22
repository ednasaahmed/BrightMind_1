@extends('layout.inpa')
@section('title','Brightmind')
@section('content')
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
<section class="section">
  <div class="container"> 
    <div class="row justify-content-center"> 
    <div class="col-12">
        <br>
            <h2>Perfil</h2>
        </div>
      <div class="col-md-4"> 
        <div class="card">
          <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                @csrf 
                <div class="profile-widget-headet text-center">
                  <i class="bi bi-person-circle" style="font-size: 12rem;"></i>
                </div>
                @if($estudiante->sexo == 'F')
                    <h5 class="card-title text-center" style="font-size: 35px;">Alumna {{ $estudiante->nombre }}</h5>
                @else
                    <h5 class="card-title text-center" style="font-size: 35px;">Alumno {{ $estudiante->nombre }}</h5>
                @endif

            </form>
          </div>
        </div>
      </div>
      <div class="col-md-8"> 
      @if($mensaje = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $mensaje}}
                </div>
                @endif
        <div class="card1">
        <form method="post" class="needs-validation" novalidate="" action="{{ url('/perfila/update' . $estudiante->id_estudiante) }}">
        @csrf  
        <div class="card-header">
              <h4>Editar Perfil</h4>
            </div>
            <div class="card-body">
              <div class="row">                               
                <div class="form-group col-md-4 col-12">
                  <label>Nombres</label>
                  <input type="text" class="form-control" name="nombre" value="{{ $estudiante->nombre }}" required>
                  <div class="invalid-feedback">
                    Por favor ingresa un nombre
                  </div>
                </div>
                <div class="form-group col-md-4 col-12">
                  <label>Apellido Paterno</label>
                  <input type="text" class="form-control" name="apellido paterno" value="{{ $estudiante->apellido_paterno }}" required>
                  <div class="invalid-feedback">
                    Por favor ingresa un apellido paterno
                  </div>
                </div>
                <div class="form-group col-md-4 col-12">
                  <label>Apellido Materno</label>
                  <input type="text" class="form-control" name="apellido_materno" value="{{ $estudiante->apellido_materno }}" required>
                  <div class="invalid-feedback">
                    Por favor ingresa un apellido materno
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="form-group col-md-6 col-12">
                  <label>Fecha de Nacimiento</label>
                  <input type="date" class="form-control" name="fecha_nacimiento" value="{{ $estudiante->fecha_nacimiento }}" required>
                  <div class="invalid-feedback">
                    Por favor ingresa una fecha de nacimiento válida
                  </div>
                </div>
                <div class="form-group col-md-6 col-12">
                  <label>Sexo</label>
                  <select class="form-select" name="sexo">
                    <option value="M" {{ $estudiante->sexo == 'M' ? 'selected' : '' }}>Hombre</option>
                    <option value="F" {{ $estudiante->sexo == 'F' ? 'selected' : '' }}>Mujer</option>
                  </select>
                </div>
              </div>
            </div>
      <div class="col-12 text-center">
        <img src="images/logo4.png" alt="Logo" class="img-fluid">
      </div>
      <div class="boton"> 
      <button type="submit" class="btn1" >Guardar Cambios</button>
    </div>

          </form>
        </div>
      </div>
    </div>
  </div>
<br>
  <script>
    document.getElementById('edit_profile_picture').addEventListener('click', function(event) {
        event.preventDefault(); 
        document.getElementById('profile_picture').click(); 
    });
</script>
</section>
</section>
@endsection
