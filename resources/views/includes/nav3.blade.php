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
                <li class="nav-links">
                    <a href="#" id="messages-button">
                        <i class='bx bx-message icon'></i>
                        <span class="text nav-text">Mensajes</span>
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

<div id="message-panel">
    <div class="message-header">
        <h5>Mensajes</h5>
        <button id="close-message-panel" class="btn btn-secondary">Cerrar</button>
    </div>
    <div class="conversation-list">
        <!-- Lista de conversaciones -->
        <ul id="conversations">
            <li data-conversation-id="1"><i class="bi bi-person-circle icono-grande"></i>Alumno: Estefy Barraza Carreon <br> <br> Estefy: Hola, Estoy lista para comenzar</li>
            <li data-conversation-id="2"><i class="bi bi-person-circle icono-grande"></i>Alumno: Edna Amhed Cardenas<br> <br> Edna: Que tal, Estoy preparada para la sesión</li>
            <!-- Más conversaciones -->
        </ul>
    </div>
     <!-- Aquí irán los mensajes -->
    <!-- <div class="message-body">
        <div class="message-input">
        <input type="text" id="message-input" placeholder="Escribe un mensaje">
        <button id="send-message" class="btn btn-primary">Enviar</button>
    </div> -->
    </div>
</div>

<script src="js/script.js"></script>

</body>