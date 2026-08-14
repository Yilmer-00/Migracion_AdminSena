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

            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAM-jtaxKYljPzx7-TEn-u8MQWRjFmSUTMIrZAYLFB4ZfIHjBOlRQPlGA&s=10" alt="Logo" width="40" height="40" class="d-inline-block align-text-top me-2" style="border-radius: 5px;">
            <span class="fw-bold text-white">AdminSENA</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{ route('area.create') }}">Area</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{ route('apprentice.registro') }}">Aprendices</a>
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
                    <a class="nav-link text-white-50" href="{{ route('course.registro') }}">Formularios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white-50" href="{{ route('course_teacher.registro') }}">Asignar</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white-50" href="#" id="adminDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                            <a class="dropdown-item" href="{{ route('course_teacher.index') }}">Gestión de Instructores en Curso</a>
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
            </ul>
            </li>
            </ul>
            <form class="d-flex align-items-center m-0 me-4 me-lg-5" role="search">
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0">
                        🔍
                    </span>
                    <input class="form-control border-start-0" type="search" placeholder="Buscar..." aria-label="Buscar">

                    <button class="btn btn-light text-success fw-bold border" type="submit">
                        Buscar
                    </button>
                </div>
            </form>
            <a href="{{ url('/login')  }}" class="btn btn-outline-light fw-bold px-4 py-2 rounded-pill shadow-sm">
                🔑 Iniciar Sesión
            </a>



        </div>
    </div>
</nav>
