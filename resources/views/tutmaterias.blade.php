@extends('layout.inmat2')
@section('title','Brightmind')
@section('content')
<!-- Se supone que esta vista va en el boton Materias de la sesión del tutor -->
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

    
    <div class="materias"> 
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <p class="c-title">¿Listo para inspirar?</p>
                            <p class="c-text">¿Tienes conocimientos únicos para compartir? ¡Agrega una nueva materia y ayuda a estudiantes a descubrir nuevas pasiones!</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="c-link" data-bs-toggle="modal" data-bs-target="#crearModal">Añadir materia</a>

                        <!-- Modal -->
                        <div class="modal fade" id="crearModal" tabindex="-1" aria-labelledby="crearModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title fs-5" id="crearModalLabel">Añadir Materia</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" style="border:none; background-color: #FFFFFF;" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                              </div>
                              <div class="modal-body">
                                <form action="{{ route('tutmaterias.store', ['id_tutor' => $tutor->id_tutor]) }}" method=post>
                                  @csrf
                                  <div class="mb-3">
                                    <div class="dropdown">
                                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Elige una materia
                                      </button>
                                      <ul class="dropdown-menu">
                                        @foreach($datos as $materia)
                                        <li><a class="dropdown-item" data-materia="{{ $materia->id_materia }}" data-descripcion="{{ $materia->Descripcion }}">{{$materia->Nombre}}</a></li>
                                        @endforeach
                                      </ul>
                                    </div>
                                  </div>
                                  <input type="hidden" name="id_tutor" value="{{ $tutor->id_tutor }}">
                                  <input type="hidden" name="id_materia" id="id_materia" value="">
                                  <div class="mb-3">
                                    <label for="descripcion" class="col-form-label">Descripción</label>
                                    <textarea class="form-control" id="descripcion" readonly></textarea>
                                  </div>
                                  <div class="mb-3 d-flex justify-content-center align-items-center">
                                      <label for="precio" class="col-form-label">Precio</label>
                                      <input type="number" class="precio" id="precio" name="precio">
                                  </div>
                                  <div class="modal-footer">
                                    <button type="submit" class="btn-estilo">Guardar</button>
                                  </div>
                                </form>  
                              </div>
                              
                            </div>
                          </div>
                        </div>
                        <!-- Acaba el Modal -->
                    </div>
                </div>
            </div>
            
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <p class="c-title">Nombre</p>
                            <p class="c-text">Descripcion</p>
                            <p class="c-text">Precio</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="c-link">Editar</a>
                        </div>
                    </div>
                </div>
            
        </div>
    </div>


</section>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.dropdown-item').click(function() {
            var idMateria = $(this).data('materia');
            var descripcion = $(this).data('descripcion');
            $('#id_materia').val(idMateria);
            $('#descripcion').val(descripcion);
        });
    });
</script>
