@extends('layout.inreg')
@section('title','Sign In')
@section('content')
<<<<<<< HEAD
<div class="container text-center">
  <div class="row">
    <div class="col">
      1 of 2
    </div>
    <div class="col">
    <h1 class="titulo">REGISTRATE</h1>
  <div class="form-floating mb-3">
    <input name="email" type="email" class="form-control reg-campos" id="floatingInput" placeholder="CORREO ELECTRÓNICO">
    <label for="floatingInput">Correo Electrónico</label>
  </div>
  <div class="form-floating mb-3">
    <input name="password" type="password" class="form-control reg-campos" id="floatingPassword" placeholder="CONTRASEÑA">
    <label for="floatingPassword">Contraseña</label>
  </div>
  <div class="form-floating mb-3">
    <input type="password" class="form-control reg-campos" id="floatingPassword1" placeholder="CONFIRMAR CONTRASEÑA">
    <label for="floatingPassword">Confirmar Contraseña</label>
  </div>

  <div style="text-align: center;" name="radios">
    <div class="form-check mb-3">
      <input class="check" type="radio" name="tipo[]" value="Estudiante">Estudiante</br>
    </div>
    <div class="form-check mb-3">
      <input class="check" type="radio" name="tipo[]" value="Tutor">Tutor<br>
    </div>
=======
<main>
  <div class="barra-registro">

>>>>>>> d1e2a068352f45df972c9d4e6be80412d97a6dd7
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 d-flex justify-content-center align-items-center">
        <img src="images/logo.png" alt="Logo BrightMind">
      </div>
      <div class="col-sm-6 d-flex justify-content-center align-items-center">
        <div>
          <h1 class="centrar">Registrate</h1>
          <br>
          <div class="mb-3">
            <input type="email" class="form-control estilo-campos ancho" placeholder="Correo Electrónico">
          </div>
          <div class="mb-3">
            <input type="password" class="form-control estilo-campos ancho" placeholder="Contraseña">
          </div>
          <div class="mb-3">
            <input type="password" class="form-control estilo-campos ancho" placeholder="Confirmar Contraseña">
          </div>

          <div>
            <input class="form-control estilo-campos mb-3 ancho" placeholder="Nombre">
          </div>
          <div>
            <input class="form-control estilo-campos mb-3 ancho" placeholder="Apellido Paterno">
              
          </div>
          <div>
            <input class="form-control estilo-campos mb-3 ancho" placeholder="Apellido Materno">
          </div>

          <div>
            <div class="form-floating mb-3" id="fecha">
              <input type="date" class="form-control estilo-campos" placeholder="Fecha de Nacimiento" id="floatingFecha">
              <label for="floatingFecha">Fecha de Nacimiento</label>
            </div>     

            <div class="form-floating mb-3" id="select">
              <select class="form-select estilo-campos" id="floatingSelect" placeholder="SEXO">
                <option value="" disabled selected></option>
                <option value="1">Femenino</option>
                <option value="2">Masculino</option>
                <option value="3">Otro...</option>
              </select>
              <label for="floatingSelect">Sexo</label>
            </div>
          </div>

          <div style="text-align:center;">
            <p class="d-inline-flex gap-1">
              <button id="radioAlumno" class="radio-btn" type="radio" name="alu-tut" autocomplete="off">
                Alumno
              </button>
              <button class="radio-btn" type="radio" name="alu-tut" autocomplete="off" checked data-bs-toggle="collapse" data-bs-target="#collapseTutor" aria-expanded="false" aria-controls="collapseTutor">
                Tutor
              </button>
            </p>
            <div class="collapse" id="collapseTutor">
              <div class="card card-body" style="margin-bottom: 10px;">
                <input class="form-control estilo-campos mb-3" type="text" placeholder="Grado Académico">
                <textarea class="form-control estilo-campos mb-3" placeholder="Descripción" rows="3"></textarea>
              </div>
            </div>
          </div>

             

          <div class="centrar">
            <a href="" id="guardar">GUARDAR</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

<script>
  document.getElementById("radioAlumno").addEventListener("click", function() {
  document.getElementById("collapseTutor").classList.remove("show");
});
</script>

@endsection
