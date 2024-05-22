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
                        <a href="#" class="c-link" data-bs-toggle="modal" data-bs-target="#crearModal">Crear nueva materia</a>

                        <!-- Modal -->
                        <div class="modal fade" id="crearModal" tabindex="-1" aria-labelledby="crearModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title fs-5" id="crearModalLabel">Crear Materia</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" style="border:none; background-color: #FFFFFF;" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                              </div>
                              <div class="modal-body">
                                <form>
                                  <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nombre de la materia</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                  </div>
                                  <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Descripción</label>
                                    <textarea class="form-control" id="message-text"></textarea>
                                  </div>
                                </form>  
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn-estilo">Guardar</button>
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
                        <p class="c-title">Matemáticas discretas</p>
                            <p class="c-text">Estudia estructuras y objetos separados. Fundamental en informática y resolución de problemas complejos.</p>
                    </div>
                    <div class="card-footer text-center">
                      <a href="#" class="c-link" data-bs-toggle="modal" data-bs-target="#editarModal">Editar</a>

                      <!-- Modal -->
                      <div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title fs-5" id="editarModalLabel">Editar Materia</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" style="border:none; background-color: #FFFFFF;" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                            </div>
                            <div class="modal-body">
                              <form>
                                <div class="mb-3">
                                  <label for="recipient-name" class="col-form-label">Nombre de la materia</label>
                                  <input type="text" class="form-control" id="recipient-name" value="">
                                </div>
                                <div class="mb-3">
                                  <label for="message-text" class="col-form-label">Descripción</label>
                                  <textarea class="form-control" id="message-text" value=""></textarea>
                                </div>
                              </form>  
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn-estilo">Guardar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Acaba el Modal -->
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
@endsection

