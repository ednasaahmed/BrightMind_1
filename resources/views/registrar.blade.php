@extends('layout.inreg')
@section('title','Sign In')
@section('content')
<main>
  <div class="barra-registro">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 d-flex justify-content-center align-items-center">
        <img src="images/logo2.png" alt="Logo BrightMind">
      </div>
      
      <div class="col-sm-6 d-flex justify-content-center align-items-center">
        <div>
          <h1 class="centrar">Registrate</h1>
          <br>
          <form method="POST" class='login'>
          @csrf
          <div class="mb-3">
            <input type="email" class="form-control estilo-campos ancho" name="email" placeholder="Correo Electrónico" required>
          </div>
          <div class="mb-3">
            <input type="password" class="form-control estilo-campos ancho" name="password" placeholder="Contraseña" required>
          </div>
          <div class="mb-3">
            <input type="password" class="form-control estilo-campos ancho" name="confirm-password" placeholder="Confirmar Contraseña" required>
          </div>

          <div>
            <input class="form-control estilo-campos mb-3 ancho" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}" required>
          </div>
          <div>
            <input class="form-control estilo-campos mb-3 ancho" name="apellido_paterno" placeholder="Apellido Paterno" value="{{ old('apellido_paterno') }}" required>
              
          </div>
          <div>
            <input class="form-control estilo-campos mb-3 ancho" name="apellido_materno" placeholder="Apellido Materno" value="{{ old('apellido_materno') }}" required>
          </div>

          <div>
            <div class="form-floating mb-3" id="fecha">
              <input type="date" class="form-control estilo-campos" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" id="floatingFecha" value="{{ old('fecha_nacimiento') }}" required>
              <label for="floatingFecha">Fecha de Nacimiento</label>
            </div>     

            <div class="form-floating mb-3" id="select">
              <select class="form-select estilo-campos" name="sexo" id="floatingSelect" placeholder="SEXO" >
                <option value="" disabled selected></option>
                <option value="F">Femenino</option>
                <option value="M">Masculino</option>
                <option value="O">Otro...</option>
              </select>
              <label for="floatingSelect">Sexo</label>
            </div>
          </div>
          @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
          @endif
          <div style="text-align:center;">
            <p class="d-inline-flex gap-1">
              <button id="radioAlumno" class="radio-btn" type="radio" name="alu-tut"  value="Alumno" autocomplete="off">
                Alumno
              </button>
              <button class="radio-btn" type="radio" name="alu-tut" value="tutor" autocomplete="off" value="Tutor" checked data-bs-toggle="collapse" data-bs-target="#collapseTutor" aria-expanded="false" aria-controls="collapseTutor">
                Tutor
              </button>
            </p>
            <div class="collapse" id="collapseTutor">
              <div class="card card-body" style="margin-bottom: 10px;">
                <input class="form-control estilo-campos mb-3" type="text" name="grado" placeholder="Grado Académico">
                <textarea class="form-control estilo-campos mb-3" name="descripcion" placeholder="Descripción" rows="3"></textarea>
              </div>
            </div>
          </div>
          <div class="centrar">
            <a href="{{route('register')}}" id="guardar">GUARDAR</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  </form>
      

</main>

<script>
 // document.getElementById("radioAlumno").addEventListener("click", function() {
//  document.getElementById("collapseTutor").classList.remove("show");
//});
</script>

@endsection
