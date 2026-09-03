@extends('layouts.app')

@section('content')

<div class="container">

    <div class="mb-4">
        <h2 class="fw-bold text-dark">
            🛡️ Dashboard del Administrador
        </h2>

        <p class="text-muted">
            Bienvenido, {{ auth()->user()->name }}.
            Desde aquí puedes administrar el sistema AdminSena.
        </p>
    </div>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <h5 class="fw-bold">🏢 Áreas</h5>
                    <p class="text-muted">
                        Gestiona las áreas de formación.
                    </p>

                    <a href="{{ route('area.index') }}"
                       class="btn btn-success">
                        Gestionar
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <h5 class="fw-bold">💻 Computadores</h5>
                    <p class="text-muted">
                        Administra los computadores registrados.
                    </p>

                    <a href="{{ route('computer.index') }}"
                       class="btn btn-success">
                        Gestionar
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <h5 class="fw-bold">👨‍🏫 Instructores</h5>
                    <p class="text-muted">
                        Gestiona los instructores del sistema.
                    </p>

                    <a href="{{ route('teacher.index') }}"
                       class="btn btn-success">
                        Gestionar
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <h5 class="fw-bold">🎓 Aprendices</h5>
                    <p class="text-muted">
                        Gestiona los aprendices registrados.
                    </p>

                    <a href="{{ route('apprentice.index') }}"
                       class="btn btn-success">
                        Gestionar
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <h5 class="fw-bold">📚 Cursos</h5>
                    <p class="text-muted">
                        Administra los cursos de formación.
                    </p>

                    <a href="{{ route('course.index') }}"
                       class="btn btn-success">
                        Gestionar
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <h5 class="fw-bold">📋 Asignaciones</h5>
                    <p class="text-muted">
                        Gestiona instructores y cursos.
                    </p>

                    <a href="{{ route('course_teacher.index') }}"
                       class="btn btn-success">
                        Gestionar
                    </a>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection