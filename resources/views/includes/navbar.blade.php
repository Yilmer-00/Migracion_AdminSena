<style>
    .navbar-nav .nav-link:hover {
        color: #ffffff !important;
        background-color: rgba(0, 0, 0, 0.1);
        border-radius: 4px;
        transition: all 0.3s ease;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #39A900 !important;">
    <div class="container-fluid">

        <a class="navbar-brand d-flex align-items-center" href="{{ url('/home') }}">

            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAM-jtaxKYljPzx7-TEn-u8MQWRjFmSUTMIrZAYLFB4ZfIHjBOlRQPlGA&s=10"
                alt="Logo" width="40" height="40" class="d-inline-block align-text-top me-2"
                style="border-radius: 5px;">
            <span class="fw-bold text-white">AdminSENA</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{ route('area.create') }}">Area</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page"
                        href="{{ route('apprentice.registro') }}">Aprendices</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white-50" href="{{ route('trainig-center.create') }}">Centro de estudio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white-50" href="{{ route('computer.create') }}">Nuevo computador</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white-50" href="{{ route('teacher.create') }}">Instructores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white-50" href="{{ route('course.registro') }}">Curso</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white-50" href="{{ route('course_teacher.registro') }}">Asignar</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white-50" href="#" id="adminDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Administración
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="adminDropdown">
                        <li>
                            <a class="dropdown-item" href="{{ route('area.index') }}">Gestión de Áreas</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('computer.index') }}">Gestión de Computadores</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('teacher.index') }}">Gestión de Instructores</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('course.index') }}">Gestión de Curso</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('course_teacher.index') }}">Gestión de Instructores
                                en Curso</a>
                        </li>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('apprentice.index') }}">Gestión de Aprendices</a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <a class="dropdown-item" href="{{ url('/about') }}">Quienes Somos</a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ url('/profile') }}">Perfil</a>
                </li>
            </ul>
            </li>
            </ul>
            <form class="d-flex align-items-center m-0 me-4 me-lg-5" role="search">
            </form>
            <a href="{{ route('notifications.index') }}"
                class="btn position-relative text-white border-0 me-3 d-inline-flex align-items-center justify-content-center rounded-circle btn-notification-circle"
                style="width: 40px; height: 40px; background-color: rgba(255, 255, 255, 0.2);"
                title="Centro de Notificaciones">
                🔔
                <span
                    class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-danger border border-light"
                    style="font-size: 0.7rem; padding: 0.3em 0.5em;">
                    3
                </span>
            </a>
            @if (!session()->has('user'))
                <!-- Estado: NO Autenticado -->
                <a href="{{ route('login') }}" class="btn btn-outline-light fw-bold rounded-pill px-3 shadow-sm">
                    🔑 Iniciar Sesión
                </a>
            @else
                <!-- Estado: Autenticado -->
                <div class="dropdown">
                    <button
                        class="btn btn-light fw-bold rounded-pill px-3 dropdown-toggle shadow-sm d-flex align-items-center gap-2"
                        type="button" id="userMenu" data-bs-toggle="dropdown" aria-expanded="false">

                        <!-- Badge de Rol -->
                        @if (session('user.role') === 'Admin')
                            <span class="badge bg-danger text-white rounded-pill px-2 py-1" style="font-size: 10px;">
                                🛡️ ADMIN
                            </span>
                        @else
                            <span class="badge bg-success text-white rounded-pill px-2 py-1" style="font-size: 10px;">
                                🎓 APRENDIZ
                            </span>
                        @endif

                        <span class="text-dark">{{ session('user.name') }}</span>
                    </button>

                    <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2" aria-labelledby="userMenu">
                        <!-- Datos Básicos -->
                        <li class="px-3 py-2 border-bottom">
                            <small class="d-block text-muted" style="font-size: 11px;">Conectado como:</small>
                            <span class="d-block fw-bold text-dark small">{{ session('user.email') }}</span>
                        </li>

                        <!-- Botón Mi Perfil -->
                        <li>
                            <a class="dropdown-item py-2 d-flex align-items-center gap-2"
                                href="{{ route('carnet.index') }}">
                                👤 Mi Perfil / Carnet
                            </a>
                        </li>

                        <li>
                            <hr class="dropdown-divider my-1">
                        </li>

                        <!-- Botón Cerrar Sesión -->
                        <li>
                            <form action="{{ route('logout') }}" method="POST" class="m-0">
                                @csrf
                                <button type="submit"
                                    class="dropdown-item text-danger fw-semibold py-2 d-flex align-items-center gap-2">
                                    🚪 Cerrar Sesión
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            @endif



        </div>
    </div>
</nav>