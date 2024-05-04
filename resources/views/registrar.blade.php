@extends('layout.inreg')
@section('title','Sign In')
@section('content')
<div class="container text-center">
  <div class="row">
    <div class="col">
      1 of 2
    </div>
    <div class="col">
    <h1 class="titulo">REGISTRATE</h1>
  <div class="form-floating mb-3">
    <input type="email" class="form-control reg-campos" id="floatingInput" placeholder="CORREO ELECTRÓNICO">
    <label for="floatingInput">Correo Electrónico</label>
  </div>
  <div class="form-floating mb-3">
    <input type="password" class="form-control reg-campos" id="floatingPassword" placeholder="CONTRASEÑA">
    <label for="floatingPassword">Contraseña</label>
  </div>
  <div class="form-floating mb-3">
    <input type="password" class="form-control reg-campos" id="floatingPassword" placeholder="CONFIRMAR CONTRASEÑA">
    <label for="floatingPassword">Confirmar Contraseña</label>
  </div>

  <div style="text-align: center;">
    <div class="form-check mb-3">
      <input class="check" type="radio" name="flexRadioDefault" id="Radio2" checked>
      <label for="Radio2">
        Alumno
      </label>
    </div>
    <div class="form-check mb-3">
      <input class="check" type="radio" name="flexRadioDefault" id="Radio1">
      <label for="Radio1">
        Tutor
      </label>
    </div>
  </div>

  
    <div class="form-floating">
      <input class="form-control reg-campos mb-3" placeholder="NOMBRE" id="floatingNombre">
      <label for="floatingNombre">Nombre</label>
    </div>
    <div class="form-floating">
      <input class="form-control reg-campos mb-3" placeholder="APELLIDO PATERNO" id="floatingPaterno">
      <label for="floatingPaterno">Apellido Paterno</label>
    </div>
    <div class="form-floating">
      <input class="form-control reg-campos mb-3" placeholder="APELLIDO MATERNO" id="floatingMaterno">
      <label for="floatingMaterno">Apellido Materno</label>
    </div>

    <div>
      <div class="form-floating mb-3" id="fecha">
        <input type="date" class="form-control reg-campos" placeholder="FECHA DE NACIMIENTO" id="floatingFecha">
        <label for="floatingFecha">Fecha de Nacimiento</label>
      </div>     

      <div class="form-floating mb-3" id="select">
        <select class="form-select reg-campos" id="floatingSelect" placeholder="SEXO">
          <option value="" disabled selected>Seleccionar</option>
          <option value="1">Femenino</option>
          <option value="2">Masculino</option>
          <option value="3">Otro...</option>
        </select>
        <label for="floatingSelect">Sexo</label>
      </div>
    </div>




  <div style="text-align: center;">
    <a href="" id="guardar">GUARDAR</a>
  </div>
    </div>
  </div>
<div class="container">

</div>


@endsection
