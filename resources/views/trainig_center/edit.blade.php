@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 800px; margin-top: 30px;">
    
    <!-- Botones de Navegación Rápida -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <a href="{{ route('trainig-center.index') }}" class="btn btn-secondary btn-sm shadow-sm">
            ← Volver al Listado
        </a>
        <span class="text-muted fw-bold">Módulo de Centros</span>
    </div>

    <!-- Alerta de Errores de Validación -->
    @if ($errors->any())
        <div class="alert alert-danger shadow-sm border-0 mb-4" style="border-left: 5px solid #dc3545 !important;">
            <strong class="d-block mb-1">⚠️ Por favor corrige los siguientes errores:</strong>
            <ul class="mb-0 ps-3">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Tarjeta del Formulario -->
    <div class="card shadow border-0">
        <!-- Encabezado con el Verde SENA -->
        <div class="card-header text-white py-3" style="background-color: #39A900;">
            <h4 class="mb-0 fw-bold">✏️ Editar Centro de Formación</h4>
        </div>
        
        <div class="card-body p-4 bg-light">
            <!-- La acción apunta a la actualización del Centro de Formación -->
            <form action="{{ route('trainig-center.update', $trainigCenter->id) }}" method="POST">
                @csrf
                @method('PUT') 

                <!-- Sección: Información del Centro -->
                <h5 class="text-success mb-3 border-bottom pb-2">🏢 Actualizar Datos del Centro</h5>
                
                <div class="row g-3 mb-4">
                    <!-- Nombre del Centro -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold text-muted">Nombre del Centro:</label>
                        <input type="text" 
                               name="name" 
                               class="form-control shadow-sm @error('name') is-invalid @enderror" 
                               value="{{ old('name', $trainigCenter->name) }}" 
                               placeholder="Ej. Centro de Comercio y Servicios" 
                               required>
                        @error('name')
                            <div class="invalid-feedback fw-bold">⚠️ {{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Ubicación del Centro -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold text-muted">Ubicación / Ciudad:</label>
                        <input type="text" 
                               name="location" 
                               class="form-control shadow-sm @error('location') is-invalid @enderror" 
                               value="{{ old('location', $trainigCenter->location) }}" 
                               placeholder="Ej. Popayán, Cauca" 
                               required>
                        @error('location')
                            <div class="invalid-feedback fw-bold">⚠️ {{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Botón de Registro -->
                <div class="text-end border-top pt-3">
                    <button type="submit" class="btn btn-success px-4 shadow" style="background-color: #39A900; border: none;">
                        💾 Actualizar Centro
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection