<header>
<nav style="background-color: #610C27;" class="navbar navbar-expand-lg fixed-top" >
  <a id="logo" class="navbar-brand" href="#"><img src="images/logo.png" alt="Brightmind" width="200" height="150"></a>
  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" style="border:none;">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvasLg">
    <div class="offcanvas-body" style="margin-right: 10px;">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center text-lg-start">
          <li class="nav-item">
            <a class="nav-link" href="#">INICIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">MATERIAS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ACERCA DE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">CONTACTO</a>
          </li>
      </ul>
      <div class="nav"style="text-align: center;">
        <button  class="btn btn-outline-light" type="submit" style="margin-left: 10px;"><a href="{{route('login')}}">LOGIN</a></button>
        <button  href="" class="btn btn-outline-light" type="submit" style="margin-left: 10px;"><a href="{{route('registrar')}}">SIGN UP</a></button>
      </div>
    </div>
  </div>
</nav>
</header>