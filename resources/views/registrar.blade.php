@extends('layout.inreg')
@section('title','Sign In')
@section('content')
<main>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <img src="images/logo.png" alt="">
      </div>
      <div class="col-sm-5 segunda">
        <div>
          <h1 class="titulo">Registrate</h1>
          <br>
          <div class="mb-3">
            <input type="email" class="form-control reg-campos" placeholder="CORREO ELECTRÓNICO">
          </div>
          <div class="mb-3">
            <input type="password" class="form-control reg-campos" placeholder="CONTRASEÑA">
          </div>
          <div class="mb-3">
            <input type="password" class="form-control reg-campos" placeholder="CONFIRMAR CONTRASEÑA">
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

        
          <div>
            <input class="form-control reg-campos mb-3" placeholder="NOMBRE">
          </div>
          <div>
            <input class="form-control reg-campos mb-3" placeholder="APELLIDO PATERNO">
              
          </div>
          <div>
            <input class="form-control reg-campos mb-3" placeholder="APELLIDO MATERNO">
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
    </div>
  </div>

</main>



@endsection
