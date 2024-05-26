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
                    <a href="{{route('homeTut')}}">
                    <i class='bx bx-home-alt-2 icon'></i>
                    <span class="text nav-text">Inicio</span>
                    </a>
                </li>
                <li class="nav-links">
                    <a href="{{route('tutmaterias')}}">
                    <i class='bx bx-book icon'></i>
                    <span class="text nav-text">Materias</span>
                    </a>
                </li>
                <li class="nav-links">
                    <a href="{{route('calendarT')}}">
                    <i class='bx bx-calendar icon'></i>
                    <span class="text nav-text">Calendario</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="bottom-content">
            <li class="">
                <a href="{{route('logout')}}">
                    <i class='bx bx-log-out icon'></i>
                    <span class="text nav-text">Cerrar Sesión</span>
                </a>
            </li>
        </div>
    </div>
</nav>
<script src="js/script.js"></script>

</body>