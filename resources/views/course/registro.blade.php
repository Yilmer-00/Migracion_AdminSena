@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 800px; margin-top: 30px;">

    <!-- Botones de Navegación Rápida -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <!-- Reajusté la ruta hacia el listado de cursos (habitualmente course.index). Ajusta si usas otra -->
        <a href="{{ url('/home')  }}" class="btn btn-secondary btn-sm shadow-sm">
            ← Volver al inicio
        </a>
        <span class="text-muted fw-bold">Módulo de Cursos</span>
    </div>

    <!-- Alerta de Éxito Estilizada -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show shadow-sm border-0 mb-4" role="alert" style="border-left: 5px solid #39A900 !important;">
        <strong>¡Éxito!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <!-- Tarjeta del Formulario -->
    <div class="card shadow border-0">
        <!-- Encabezado con el Verde SENA -->
        <div class="card-header text-white py-3" style="background-color: #39A900;">
            <h4 class="mb-0 fw-bold">➕ Registrar Nuevo Curso</h4>
        </div>

        <div class="card-body p-4 bg-light">
            <form action="{{ route('course.admin') }}" method="POST">
                @csrf

                <!-- Sección: Información Básica del Curso -->
                <h5 class="text-success mb-3 border-bottom pb-2">📖 Identificación del Curso</h5>

                <div class="row g-3 mb-4">
                    <!-- Número de Curso -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold text-muted">Número de Curso (Ficha):</label>
                        <input type="text" name="course_number" class="form-control shadow-sm" placeholder="Ej. 2711823" required>
                    </div>

                    <!-- Día / Jornada -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold text-muted">Día / Jornada:</label>
                        <input type="text" name="day" class="form-control shadow-sm" placeholder="Ej. Mañana / Lunes a Viernes" required>
                    </div>
                </div>

                <!-- Sección: Clasificación y Ubicación -->
                <h5 class="text-success mb-3 border-bottom pb-2">📍 Clasificación y Ubicación</h5>

                <div class="row g-3 mb-4">
                    <!-- Selector de Área -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold text-muted">Área Relacionada:</label>
                        <select name="area_id" class="form-select shadow-sm" required>
                            <option value="">-- Seleccione Área --</option>
                            @foreach($areas as $area)
                            <option value="{{ $area->id }}">{{ $area->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Selector de Centro de Formación -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold text-muted">Centro de Formación:</label>
                        <select name="training_center_id" class="form-select shadow-sm" required>
                            <option value="">-- Seleccione Centro --</option>
                            <!-- Nota: Conservé tu variable $trainig_centers (sin la "i") tal como la tienes en el controlador original -->
                            @foreach($trainig_centers as $center)
                            <option value="{{ $center->id }}">{{ $center->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Botón de Registro -->
                <div class="text-end border-top pt-3">
                    <button type="submit" class="btn btn-success px-4 shadow" style="background-color: #39A900; border: none;">
                        💾 Guardar Curso
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection