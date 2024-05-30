<body>
<nav class="sidebar close">
    <header>
        <div class="image-text">
            <span class="image">
                <img src="{{ asset('images/icon.png') }}" alt="logo">
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
                    <a href="{{route('home')}}">
                    <i class='bx bx-home-alt-2 icon'></i>
                    <span class="text nav-text">Inicio</span>
                    </a>
                </li>
                <li class="nav-links">
                    <a href="{{route('materias')}}">
                    <i class='bx bx-book icon'></i>
                    <span class="text nav-text">Materias</span>
                    </a>
                </li>
                <li class="nav-links">
                    <a href="{{route('calendar')}}">
                    <i class='bx bx-calendar icon'></i>
                    <span class="text nav-text">Calendario</span>
                    </a>
                </li>
                <!-- <li class="nav-links">
                    <a href="#" id="messages-button">
                        <i class='bx bx-message icon'></i>
                        <span class="text nav-text">Mensajes</span>
                    </a>
                </li> -->
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

<!-- <div class="main-content close">
    @yield('content')
</div> -->

<!-- <div id="message-panel">
    <div class="message-header">
        <h5>Mensajes</h5>
        <button id="close-message-panel" class="btn btn-secondary">Cerrar</button>
    </div>
    <div class="message-body"> -->
        <!-- Aquí irán los mensajes -->
    <!-- </div>
</div> -->

<script src="{{ asset('js/script.js') }}"></script>

</body>