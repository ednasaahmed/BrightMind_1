<body>
<nav class="sidebar close">
    <header>
        <div class="image-text">
            <span class="image">
                <img src="images/icon.png" alt="logo">
            </span>
            <div class="text header-text">
                <span class="name">BrightMind</span>
            </div>
        </div>
        <i class='bx bx-chevron-right toggle'></i>
    </header>
    <div class="menu-bar">
        <div class="menu">
            <ul class="menu-links">
                <li class="nav-links">
                    <a href="#">
                    <i class='bx bx-home-alt-2 icon'></i>
                    <span class="text nav-text">Inicio</span>
                    </a>
                </li>
                <li class="nav-links">
                    <a href="#">
                    <i class='bx bx-book icon'></i>
                    <span class="text nav-text">Materias</span>
                    </a>
                </li>
                <li class="nav-links">
                    <a href="#">
                    <i class='bx bx-calendar icon'></i>
                    <span class="text nav-text">Calendario</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="bottom-content">
            <li class="">
                <a href="{{route('index')}}">
                    <i class='bx bx-log-out icon'></i>
                    <span class="text nav-text">Cerrar Sesión</span>
                </a>
            </li>
            <li class="mode">
                <div class="sun-moon">
                    <i class='bx bx-moon icon moon'></i>
                    <i class='bx bx-sun icon sun'></i>
                </div>
                <span class="mode-text text">Dark Mode</span>
                <div class="toggle-switch">
                    <span class="switch"></span>
                </div>
            </li>
        </div>
    </div>
</nav>
<script src="js/script.js"></script>

</body>