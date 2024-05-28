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
            <div class="card-header d-flex justify-content-between">
              <h4 style="margin: 10px;">Editar Perfil</h4>
              <button type="submit" class="btn1">Guardar Cambios</button>
              <!-- <a href="{{route('perfilt.updateD', ['id' => $tutor->id_tutor])}}"></a> -->
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
                <div class="form-group1 col-md-6 col-12">
                  <label>Fecha de Nacimiento</label>
                  <input type="date" class="form-control" name="fecha_nacimiento" value="{{ $tutor->fecha_nacimiento }}" required="">
                  <div class="invalid-feedback">
                    Por favor ingresa una fecha de nacimiento válida
                  </div>
                </div>
                <div class="form-group col-md-6 col-12">
                  <label class="S">Sexo</label><br>
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
                  <select class="form-select" name="grado">
                  <option value="Licenciatura" {{ $tutor->grado == 'Licenciatura' ? 'selected' : '' }}>Licenciatura</option>
                    <option value="Maestria" {{ $tutor->grado == 'Maestria' ? 'selected' : '' }}>Maestría</option>
                    <option value="Doctorado" {{ $tutor->grado == 'Doctorado' ? 'selected' : '' }}>Doctorado</option>
                  </select>
                </div>
                <div class="form-group col-md-4 col-12">
                  <label>Descripción</label>
                  <textarea class="form-control estilo-campos mb-3" name ="descripcion" rows="3" >{{ $tutor->descripcion ?? 'Descripción' }}</textarea>
                  <div class="invalid-feedback">
                    Por favor ingresa una descripción
                  </div>
                </div>
            </div>
</form> 
            <form method="post" enctype="multipart/form-data" action="{{ url('/perfilt/updateD' . $tutor->id_tutor) }}">
                @csrf
            <div class="row">
                <div class="form-group col-12">
                  <label>Disponibilidad</label>
                  <div class="d-flex flex-wrap" style="padding-left:50px;">
                    <input type="checkbox" class="form-check-input me-2 " id="disponibilidad" name="disponibildad" {{ count($disponibilidad) > 0 ? 'checked' : '' }}>
                    <label class="form-check-label" for="disponibilidad">Seleccionar disponibilidad</label>
                  </div>
                  <div id="disponibilidad-container" class="{{ count($disponibilidad) == 0 ? 'd-none' : '' }}">
                    @foreach($disponibilidad as $d)
                    <div class="availability-item">
                      <div class="row">
                        <div class="col-md-4 col-12 mb-2">
                          <label>Fecha</label>
                          <input type="date" class="form-control" name="disponibilidad_fechas[{{ $loop->index }}][fecha]" value="{{ $d->fecha }}" required>
                        </div>
                        <div class="col-md-4 col-12 mb-2">
                          <label>Hora Inicio</label>
                          <input type="time" class="form-control" name="disponibilidad_fechas[{{ $loop->index }}][hora_inicio]" value="{{ $d->hora_inicio }}" required>
                        </div>
                        <div class="col-md-4 col-12 mb-2">
                          <label>Hora Fin</label>
                          <input type="time" class="form-control" name="disponibilidad_fechas[{{ $loop->index }}][hora_fin]" value="{{ $d->hora_fin }}" required>
                        </div>
                      </div>
                    <div class="text-right">
                      <button type="button" class="btn btn-sm btn-outline-danger mb-2 remove-availability-item ms-auto">Eliminar Horario</button>
                    </div>
                    </div>
                    @endforeach
                  </div>
                  <div class="d-flex" style="padding-top:10px;">
                  <button type="button" class="btn btn-sm btn-outline-secondary mb-2 add-availability-item" style="{{ count($disponibilidad) > 0 ? 'display:block;' : 'display:none;' }} margin-right: 100px;">Agregar Horario</button>
                  <button type="submit" class="btn1 add-availability-item2" style="{{ count($disponibilidad) > 0 ? 'display:block;' : 'display:none;' }}">Guardar Disponibilidad</button>  
                </div>
                </div>
              </div>
          </form>
              <br>
              <div class="col-12 text-center">
                <img src="images/logo4.png" alt="Logo" class="img-fluid">
              </div>
              
        </div>
      </div>
    </div>
  </div>
</section>
</section>
<br>
<script>
const disponibilidadContainer = document.getElementById('disponibilidad-container');
const disponibilidadCheckbox = document.getElementById('disponibilidad');
const addAvailabilityItemButton = document.querySelector('.add-availability-item');
const addAvailabilityItemButton2 = document.querySelector('.add-availability-item2');

disponibilidadCheckbox.addEventListener('change', function() {
    if (this.checked) {
            disponibilidadContainer.classList.remove('d-none');
            addAvailabilityItemButton.style.display = 'block';
            addAvailabilityItemButton2.style.display = 'block';
    } else {
        disponibilidadContainer.classList.add('d-none');
        addAvailabilityItemButton.style.display = 'none';
        addAvailabilityItemButton2.style.display = 'none';
    }
});

addAvailabilityItemButton.addEventListener('click', function() {
  const index = document.querySelectorAll('.availability-item').length;

  const availabilityItem = document.createElement('div');
  availabilityItem.classList.add('availability-item');

  availabilityItem.innerHTML = `
    <div class="row">
      <div class="col-md-4 col-12 mb-2">
        <label>Fecha</label>
          <input type="date" class="form-control" name="fechaN" required>
      </div>
      <div class="col-md-4 col-12 mb-2">
        <label>Hora Inicio</label>
          <input type="time" class="form-control" name="hora_inicioN" required>
      </div>
      <div class="col-md-4 col-12 mb-2">
        <label>Hora Fin</label>
          <input type="time" class="form-control" name="hora_finN" required>
      </div>
      <div class="col-md-12 mb-2 text-right">
        <button type="button" class="btn btn-sm btn-outline-danger remove-availability-item">Eliminar Horario</button>
      </div>
    </div>
  `;

  disponibilidadContainer.appendChild(availabilityItem);
  addAvailabilityItemButton.style.display = 'block';
});

disponibilidadContainer.addEventListener('click', function(event) {
        const removeButton = event.target.closest('.remove-availability-item');
        if (removeButton) {
            const availabilityItem = removeButton.closest('.availability-item');
            const availabilityId = availabilityItem.dataset.id;

            if (availabilityId) {
                fetch(`/perfilt/delete/${availabilityId}`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    }
                }).then(response => response.json()).then(data => {
                    if (data.success) {
                        availabilityItem.remove();
                    } else {
                        alert(data.message || 'Error al eliminar la disponibilidad');
                    }
                }).catch(error => console.error('Error:', error));
            } else {
                availabilityItem.remove();
                if (document.querySelectorAll('.availability-item').length === 0) {
                    addAvailabilityItemButton.style.display = 'none'; // Ocultar el botón si no hay más horarios
                }
            }
        }
    });
</script>
<script>
document.getElementById('edit_profile_picture').addEventListener('click', function(event) {
    event.preventDefault(); 
    document.getElementById('profile_picture').click(); 
});
</script>
@endsection