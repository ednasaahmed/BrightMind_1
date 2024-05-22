@extends('layout.inpa2')
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
            <img alt="image" src="{{ $tutor->foto }}" class="rounded-circle mr-1"> 
        </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a href="{{route('perfilt')}}" class="dropdown-item">
            <i class="bi bi-person-fill"></i> Perfil
            </a>
            <div class="dropdown-divider"></div>
            <a href="{{route('logout')}}" class="dropdown-item ">
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
            <form method="post" enctype="multipart/form-data" action="{{ url('/perfilt/update' . $tutor->id_tutor) }}">
                @csrf 
                <div class="profile-widget-headet text-center">
                    <img alt="image" src="{{ $tutor->foto ?? 'images/t1.jpg' }}" class="rounded-circle profile-widget-picture">
                </div>
                <div class="mb-4 position-relative">
                  <input type="file" class="form-control d-none" id="profile_picture" name="foto">
                  <a href="#" id="edit_profile_picture" class="d-inline-block circle-icon">
                      <span class="bi bi-pencil text-white"></span>
                  </a>
              </div>
            <h5 class="card-title text-center" style="font-size: 30px;">Tutor {{ $tutor->nombre }}</h5>
            <div class="boton1 text-center">
              <button type="submit" class="btn1" >Guardar Foto</button>
          </div>
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
          <form method="post" class="needs-validation" novalidate="" action="{{ url('/perfilt/update' . $tutor->id_tutor) }}">
          @csrf 
            <div class="card-header">
              <h4>Editar Perfil</h4>
            </div>
            <div class="card-body">
              <div class="row">                               
                <div class="form-group col-md-4 col-12">
                  <label>Nombres</label>
                  <input type="text" class="form-control" name="nombre" value="{{ $tutor->nombre }}" required="">
                  <div class="invalid-feedback">
                    Por favor ingresa un nombre
                  </div>
                </div>
                <div class="form-group col-md-4 col-12">
                  <label>Apellido Paterno</label>
                  <input type="text" class="form-control" name="apellido_paterno" value="{{ $tutor->apellido_paterno }}" required="">
                  <div class="invalid-feedback">
                    Por favor ingresa un apellido paterno
                  </div>
                </div>
                <div class="form-group col-md-4 col-12">
                  <label>Apellido Materno</label>
                  <input type="text" class="form-control" name="apellido_materno" value="{{ $tutor->apellido_materno }}" required="">
                  <div class="invalid-feedback">
                    Por favor ingresa un apellido materno
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="form-group col-md-6 col-12">
                  <label>Fecha de Nacimiento</label>
                  <input type="date" class="form-control" name="fecha_nacimiento" value="{{ $tutor->fecha_nacimiento }}" required="">
                  <div class="invalid-feedback">
                    Por favor ingresa una fecha de nacimiento válida
                  </div>
                </div>
                <div class="form-group col-md-6 col-12">
                  <label>Sexo</label>
                  <select class="form-select" name="sexo">
                  <option value="M" {{ $tutor->sexo == 'M' ? 'selected' : '' }}>Hombre</option>
                    <option value="F" {{ $tutor->sexo == 'F' ? 'selected' : '' }}>Mujer</option>
                  </select>
                </div>
              </div>
            <br>
            <div class="row">                               
                <div class="form-group col-md-4 col-12">
                  <label>Grado Académico</label>
                  <input type="text" class="form-control" name="grado" value="{{ $tutor->grado ?? 'Grado Académico' }}" required="">
                  <div class="invalid-feedback">
                    Por favor ingresa un grado académico
                  </div>
                </div>
                <div class="form-group col-md-4 col-12">
                  <label>Descripción</label>
                <textarea class="form-control estilo-campos mb-3" name ="descripcion" rows="3">{{ $tutor->grado ?? 'Descripción' }}</textarea>
                  <div class="invalid-feedback">
                    Por favor ingresa una descripción
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="form-group col-12">
                <label>Disponibilidad</label>
                <div class="d-flex flex-wrap" style="padding-left:50px;">
                  <input type="checkbox" class="form-check-input me-2" id="disponibilidad">
                  <label class="form-check-label" for="disponibilidad">Seleccionar disponibilidad</label>
                </div>
                <div id="disponibilidad-container" class="d-none">
                  <div class="availability-item">
                    <div class="row">
                      <div class="col-md-6 col-12 mb-2">
                        <label>Fecha</label>
                        <input type="datetime-local" class="form-control" name="disponibilidad_fechas[]" required>
                      </div>
                    </div>
                  </div>
                  <button type="button" class="btn btn-sm btn-outline-secondary mb-2 add-availability-item">Agregar Horario</button>
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
const disponibilidadContainer = document.getElementById('disponibilidad-container');
const disponibilidadCheckbox = document.getElementById('disponibilidad');

disponibilidadCheckbox.addEventListener('change', function() {
    if (this.checked) {
        disponibilidadContainer.classList.remove('d-none');
    } else {
        disponibilidadContainer.classList.add('d-none');
    }
});

const addAvailabilityItemButton = document.querySelector('.add-availability-item');

addAvailabilityItemButton.addEventListener('click', function() {
  const availabilityItem = document.createElement('div');
  availabilityItem.classList.add('availability-item');

  availabilityItem.innerHTML = `
    <div class="row">
      <div class="col-md-6 col-12 mb-2">
        <label>Fecha</label>
        <input type="datetime-local" class="form-control" name="disponibilidad_fechas[]" required>
      </div>
      <div class="col-md-12 mb-2 text-right">
        <button type="button" class="btn btn-sm btn-outline-danger remove-availability-item">Eliminar Horario</button>
      </div>
    </div>
  `;

  disponibilidadContainer.appendChild(availabilityItem);
});

disponibilidadContainer.addEventListener('click', function(event) {
  const removeButton = event.target.closest('.remove-availability-item');
  if (removeButton) {
    const availabilityItem = removeButton.parentNode.parentNode;
    availabilityItem.remove(); 
  }
});
  </script>
  <script>
    document.getElementById('edit_profile_picture').addEventListener('click', function(event) {
        event.preventDefault(); 
        document.getElementById('profile_picture').click(); 
    });
</script>
</section>
</section>
@endsection
