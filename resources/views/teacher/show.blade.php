@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 750px; margin-top: 30px;">
    <div class="mb-3">
        <a href="{{ url('/teacher/list') }}" class="btn btn-secondary btn-sm">← Volver</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-header text-white" style="background-color: #39A900;">
            <h4 class="mb-0">Información del Instructor</h4>
        </div>
        <div class="card-body">
            <h5 class="text-success mb-3">Datos de Contacto</h5>
            <div class="row mb-2">
                <div class="col-sm-4 fw-bold text-muted">Nombre Completo:</div>
                <div class="col-sm-8">{{ $teacher->name }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 fw-bold text-muted">Correo Institucional:</div>
                <div class="col-sm-8"><a href="mailto:{{ $teacher->email }}">{{ $teacher->email }}</a></div>
            </div>

            <hr>
            <h5 class="text-success mb-3">Asignación Académica</h5>
            <div class="row mb-2">
                <div class="col-sm-4 fw-bold text-muted">Área:</div>
                <div class="col-sm-8">
                    <span class="badge bg-primary">{{ $teacher->area->name ?? 'No asignada' }}</span>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-4 fw-bold text-muted">Centro de Formación:</div>
                <div class="col-sm-8">{{ $teacher->trainig_center->name ?? 'No asignado' }}</div>
            </div>
        </div>
        <div class="card-footer bg-light text-end">
            <small class="text-muted float-start mt-1">ID Instructor: {{ $teacher->id }}</small>
        </div>
    </div>
</div>
@endsection