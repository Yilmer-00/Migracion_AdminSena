@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 750px; margin-top: 30px;">
    
    <!-- Botón para regresar al listado de asignaciones -->
    <div class="mb-3">
        <a href="{{ url('/course_teacher/list') }}" class="btn btn-secondary btn-sm">
            ← Volver a Asignaciones
        </a>
    </div>

    <!-- Tarjeta de Detalle de la Asignación -->
    <div class="card shadow-sm">
        <!-- Encabezado con el color del SENA -->
        <div class="card-header text-white" style="background-color: #39A900;">
            <h4 class="mb-0">Detalle de Asignación Académica</h4>
        </div>
        
        <div class="card-body">
            <!-- Sección del Instructor -->
            <h5 class="text-success mb-3">👤 Instructor Asignado</h5>
            <div class="row mb-2">
                <div class="col-sm-4 fw-bold text-muted">Nombre Completo:</div>
                <div class="col-sm-8">
                    {{ $courseTeacher->teacher->name ?? 'Instructor no encontrado' }}
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 fw-bold text-muted">Correo de Contacto:</div>
                <div class="col-sm-8">
                    @if(isset($courseTeacher->teacher))
                        <a href="mailto:{{ $courseTeacher->teacher->email }}">{{ $courseTeacher->teacher->email }}</a>
                    @else
                        -
                    @endif
                </div>
            </div>

            <hr>

            <!-- Sección del Curso / Ficha -->
            <h5 class="text-success mb-3">📖 Ficha / Programa</h5>
            <div class="row mb-2">
                <div class="col-sm-4 fw-bold text-muted">Número de Ficha:</div>
                <div class="col-sm-8">
                    @if(isset($courseTeacher->course))
                        <span class="badge bg-primary px-2 py-1">N° {{ $courseTeacher->course->course_number }}</span>
                    @else
                        <span class="text-danger">Curso no encontrado</span>
                    @endif
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 fw-bold text-muted">Jornada Horaria:</div>
                <div class="col-sm-8 text-capitalize">
                    {{ $courseTeacher->course->day ?? '-' }}
                </div>
            </div>

            <hr>

            <!-- Fechas de Registro -->
            <div class="row mb-1 small text-muted">
                <div class="col-sm-4">Asignado el:</div>
                <div class="col-sm-8">{{ $courseTeacher->created_at ? $courseTeacher->created_at->format('d/m/Y h:i A') : 'No registra' }}</div>
            </div>
        </div>

        <div class="card-footer bg-light text-end">
            <small class="text-muted float-start mt-1">ID Relación: {{ $courseTeacher->id }}</small>
        </div>
    </div>
</div>
@endsection