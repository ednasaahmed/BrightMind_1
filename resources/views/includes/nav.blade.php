<header>
<nav style="background-color: #610C27;" class="navbar navbar-expand-lg fixed-top" >
  <a id="logo" class="navbar-brand" href="#"><img src="images/logo.png" alt="Brightmind" width="200" height="150"></a>
  <button class="navbar-toggler ml-auto custom-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" style="border:none;">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="offcanvas offcanvas-end barra-lateral" tabindex="-1" id="navbarOffcanvasLg">
    <div class="offcanvas-body" style="margin-right: 10px;">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center text-lg-start" style="margin-right: 10px;">
          <li class="nav-item">
            <a class="nav-linkl" href="#">INICIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-linkl" href="#">NOSOTROS</a>
          </li>
          <li class="nav-item">
            <a class="nav-linkl" href="#">CONTACTO</a>
          </li>
      </ul>
      <div>
        <a class="log-sign" href="{{route('login')}}">LOGIN</a>
        <a class="log-sign" href="{{route('registrar')}}">SIGN UP</a>
      </div>
    </div>
  </div>
</nav>
</header>