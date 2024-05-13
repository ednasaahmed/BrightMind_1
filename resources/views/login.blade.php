@extends('layout.inlog')
@section('title','Login')
@section('content')

<main class="one">
    <div class="wrapper">
  <form method="POST" class="login">
    @csrf
    <h1>Iniciar Sesión</h1>
    <div class="input-box" >
      <label for="exampleDropdownFormEmail1" class="form-label">Correo Electrónico</label>
      <input type="email" class="form-control" id="exampleDropdownFormEmail1" name="email"  placeholder="email@example.com" required>
    </div>
    <div class="input-box">
      <label for="exampleDropdownFormPassword1" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="exampleDropdownFormPassword1" name="password"  placeholder="Contraseña" required>
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="dropdownCheck">
        <label class="form-check-label" for="dropdownCheck" name="remember">
          Recordar Usuario
        </label>
      </div>
    </div>
    <button type="submit" class="btn1"><a href="{{route('ingresar')}}">INGRESAR</a></button>
  </form>
  <div class="register-link">
  <p>¿No tienes cuenta? <a href="{{route('registrar')}}">Regístrate</a></p>
  <a href="#">¿Olvidaste tu contraseña?</a>
  </div>
</div>
</main>
@endsection
