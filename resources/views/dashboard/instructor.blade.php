@extends('layouts.app')

@section('content')

<div class="container">

    <div class="mb-4">
        <h2 class="fw-bold text-dark">
            👨‍🏫 Dashboard del Instructor
        </h2>

        <p class="text-muted">
            Bienvenido, {{ auth()->user()->name }}.
        </p>
    </div>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <h5 class="fw-bold">📚 Mis Cursos</h5>

                    <p class="text-muted">
                        Consulta los cursos que tienes asignados.
                    </p>

                    <a href="{{ route('course.index') }}"
                       class="btn btn-primary">
                        Ver cursos
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <h5 class="fw-bold">🎓 Aprendices</h5>

                    <p class="text-muted">
                        Consulta la información de los aprendices.
                    </p>

                    <a href="{{ route('apprentice.index') }}"
                       class="btn btn-primary">
                        Ver aprendices
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <h5 class="fw-bold">🆔 Mi Carnet</h5>

                    <p class="text-muted">
                        Consulta tu información y carnet digital.
                    </p>

                    <a href="{{ route('carnet.index') }}"
                       class="btn btn-primary">
                        Ver carnet
                    </a>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection