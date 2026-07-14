@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 800px; margin-top: 30px;">
    
    <!-- Botones de Navegación Rápida -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <!-- Reajusté la ruta hacia el listado de asignaciones. Cámbiala si tu index tiene otro nombre -->
        <a href="{{ route('course_teacher.index') }}" class="btn btn-secondary btn-sm shadow-sm">
            ← Volver al Listado
        </a>
        <span class="text-muted fw-bold">Módulo de Asignaciones</span>
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
            <h4 class="mb-0 fw-bold">🔗 Asignar Instructor a un Curso</h4>
        </div>
        
        <div class="card-body p-4 bg-light">
            <form action="{{ route('course_teacher.admin') }}" method="POST">
                @csrf

                <!-- Sección: Datos de la Vinculación -->
                <h5 class="text-success mb-3 border-bottom pb-2">📋 Detalles de la Vinculación</h5>
                
                <div class="row g-3 mb-4">
                    <!-- Selector de Curso -->
                    <div class="col-md-6">
                        <label for="curse_id" class="form-label fw-bold text-muted">Seleccione el Curso (Ficha):</label>
                        <select name="curse_id" id="curse_id" class="form-select shadow-sm" required>
                            <option value="">-- Seleccione un Curso --</option>
                            @foreach($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->course_number }} — {{ $course->day }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Selector de Instructor -->
                    <div class="col-md-6">
                        <label for="teacher_id" class="form-label fw-bold text-muted">Seleccione el Instructor:</label>
                        <select name="teacher_id" id="teacher_id" class="form-select shadow-sm" required>
                            <option value="">-- Seleccione un Instructor --</option>
                            @foreach($teachers as $teacher)
                                <option value="{{ $teacher->id }}">{{ $teacher->name }} ({{ $teacher->email }})</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Botón de Registro -->
                <div class="text-end border-top pt-3">
                    <button type="submit" class="btn btn-success px-4 shadow" style="background-color: #39A900; border: none;">
                        🔗 Asignar Instructor
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection