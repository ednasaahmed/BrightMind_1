@extends('layout.inca2')
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
          <img alt="image" src="{{ $tutor->foto ?? 'images/t1.jpg' }}" class="rounded-circle mr-1">
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


<div id='calendar'></div>

 <!-- Modal -->
 <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="eventModalLabel">Evento</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p id="id_sesion"></p>
          <p id="nombre_estudiante"></p>         
          <p id="nombre_materia"></p>
          <p id="fecha"></p>
          <p id="estado"></p>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" ><a href="#"></a>Chat</button>
        <button type="submit" class="btn btn-secondary" ><a href="#"></a>Finalizar</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>


<!-- Incluye FullCalendar JS -->
   <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.3/main.min.js'></script>
  <!-- Incluye jQuery y Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

  <script>
        document.addEventListener('DOMContentLoaded', function() {
            const calendarEl = document.getElementById('calendar');

            // Recoge las sesiones desde la variable PHP
            const sesiones = @json($sesiones);

            // Mapea las sesiones a los eventos de FullCalendar
            const events = sesiones.map(sesion => ({
                title: `Sesion ${sesion.id_sesion}`,
                start: sesion.fecha ,
                end: sesion.fecha, // Asegúrate de que tienes esta columna en tu tabla si la necesitas
                extendedProps: {
                    id_sesion: sesion.id_sesion,
                    nombre_estudiante: sesion.nombre_estudiante,
                    apellidoPat_estudiante: sesion.apellidoPat_estudiante,
                    apellidoMat_estudiante: sesion.apellidoMat_estudiante,
                    nombre_materia: sesion.nombre_materia,
                    estado: sesion.estado,
                }
            }));

            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: events,
                eventClick: function(info) {
                    // Muestra el modal
                    $('#eventModal').modal('show');
                    // Rellena el contenido del modal con los detalles del evento
                    document.getElementById('id_sesion').innerText = `ID Sesión: ${info.event.extendedProps.id_sesion}`;
                    document.getElementById('nombre_estudiante').innerText = `Estudiante: ${info.event.extendedProps.nombre_estudiante}` + ` ${info.event.extendedProps.apellidoPat_estudiante}`+` ${info.event.extendedProps.apellidoMat_estudiante}`;
                    document.getElementById('nombre_materia').innerText = `Materia: ${info.event.extendedProps.nombre_materia}`;
                    document.getElementById('fecha').innerText = `Fecha: ${info.event.start.toLocaleString()}`;
                    document.getElementById('estado').innerText = `Estado: ${info.event.extendedProps.estado ? 'Activo' : 'Inactivo'}`;
                }
            });
            calendar.render();
        });
    </script>
</section>
    
@endsection