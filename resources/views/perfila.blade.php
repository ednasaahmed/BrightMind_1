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
            <img alt="image" src="images/c1.jpg" class="rounded-circle mr-1"> 
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
                    <img alt="image" src="images/t1.jpg" class="rounded-circle profile-widget-picture">
                </div>
                <div class="mb-4 position-relative">
    <input type="file" class="form-control d-none" id="profile_picture" name="profile_picture">
    <a href="#" id="edit_profile_picture" class="d-inline-block circle-icon">
        <span class="bi bi-pencil text-white"></span>
    </a>
</div>

            <h5 class="card-title text-center">Nombre Alumno</h5>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-8"> 
        <div class="card1">
          <form method="post" class="needs-validation" novalidate="">
            <div class="card-header">
              <h4>Editar Perfil</h4>
            </div>
            <div class="card-body">
              <div class="row">                               
                <div class="form-group col-md-4 col-12">
                  <label>Nombres</label>
                  <input type="text" class="form-control" value="Nombre" required="">
                  <div class="invalid-feedback">
                    Por favor ingresa un nombre
                  </div>
                </div>
                <div class="form-group col-md-4 col-12">
                  <label>Apellido Paterno</label>
                  <input type="text" class="form-control" value="Apellido Paterno" required="">
                  <div class="invalid-feedback">
                    Por favor ingresa un apellido paterno
                  </div>
                </div>
                <div class="form-group col-md-4 col-12">
                  <label>Apellido Materno</label>
                  <input type="text" class="form-control" value="Apellido Materno" required="">
                  <div class="invalid-feedback">
                    Por favor ingresa un apellido materno
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="form-group col-md-6 col-12">
                  <label>Fecha de Nacimiento</label>
                  <input type="date" class="form-control" value="" required="">
                  <div class="invalid-feedback">
                    Por favor ingresa una fecha de nacimiento válida
                  </div>
                </div>
                <div class="form-group col-md-6 col-12">
                  <label>Sexo</label>
                  <select class="form-select">
                    <option value="1" selected>Hombre</option>
                    <option value="2">Mujer</option>
                  </select>
                </div>
              </div>
            </div>
      <div class="col-12 text-center">
        <img src="images/logo4.png" alt="Logo" class="img-fluid">
      </div>
          </form>
          
        </div>
      </div>
    </div>
  </div>
  <div class="boton">
                  <button class="btn1" >Guardar Cambios</button>
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
