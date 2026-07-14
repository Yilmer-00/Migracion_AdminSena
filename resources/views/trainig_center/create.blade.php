@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 800px; margin-top: 30px;">
    
    <!-- Botones de Navegación Rápida -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <!-- Ajusté la ruta de vuelta al listado habitual; cámbiala si tu index tiene otro nombre -->
        <a href="{{ route('trainig-center.index') }}" class="btn btn-secondary btn-sm shadow-sm">
            ← Volver al Listado
        </a>
        <span class="text-muted fw-bold">Módulo de Centros</span>
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
            <h4 class="mb-0 fw-bold">➕ Registrar Nuevo Centro de Formación</h4>
        </div>
        
        <div class="card-body p-4 bg-light">
            <form action="{{ route('trainig-center.store') }}" method="POST">
                @csrf

                <!-- Sección: Información del Centro -->
                <h5 class="text-success mb-3 border-bottom pb-2">🏢 Datos del Centro de Formación</h5>
                
                <div class="row g-3 mb-4">
                    <!-- Nombre del Centro -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold text-muted">Nombre del Centro:</label>
                        <input type="text" name="name" class="form-control shadow-sm" placeholder="Ej. Centro de Comercio y Servicios" required>
                    </div>

                    <!-- Ubicación del Centro -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold text-muted">Ubicación / Ciudad:</label>
                        <input type="text" name="location" class="form-control shadow-sm" placeholder="Ej. Popayán, Cauca" required>
                    </div>
                </div>

                <!-- Botón de Registro -->
                <div class="text-end border-top pt-3">
                    <button type="submit" class="btn btn-success px-4 shadow" style="background-color: #39A900; border: none;">
                        💾 Guardar Centro
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection