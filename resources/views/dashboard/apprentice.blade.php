@extends('layouts.app')

@section('content')

<div class="container">

    <div class="mb-4">
        <h2 class="fw-bold text-dark">
            🎓 Dashboard del Aprendiz
        </h2>

        <p class="text-muted">
            Bienvenido, {{ auth()->user()->name }}.
        </p>
    </div>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <h5 class="fw-bold">🆔 Mi Carnet</h5>

                    <p class="text-muted">
                        Consulta tu carnet digital.
                    </p>

                    <a href="{{ route('carnet.index') }}"
                       class="btn btn-success">
                        Ver carnet
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <h5 class="fw-bold">📚 Mis Cursos</h5>

                    <p class="text-muted">
                        Consulta tus cursos de formación.
                    </p>

                    <a href="{{ route('course.index') }}"
                       class="btn btn-success">
                        Ver cursos
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <h5 class="fw-bold">👤 Mi Perfil</h5>

                    <p class="text-muted">
                        Consulta tu información personal.
                    </p>

                    <a href="{{ route('carnet.index') }}"
                       class="btn btn-success">
                        Ver perfil
                    </a>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection