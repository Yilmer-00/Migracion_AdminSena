@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 600px; margin-top: 30px;">

    <!-- Botones de Navegación Rápida -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <a href="{{ route('computer.index') }}" class="btn btn-secondary btn-sm shadow-sm">
            ← Volver al Listado
        </a>
        <span class="text-muted fw-bold">Módulo de Inventario PC</span>
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

    <!-- Tarjeta del Formulario de Edición -->
    <div class="card shadow border-0">
        <!-- Encabezado con el Verde SENA -->
        <div class="card-header text-white py-3" style="background-color: #39A900;">
            <h4 class="mb-0 fw-bold">✏️ Editar Computador</h4>
        </div>

        <div class="card-body p-4 bg-light">
            <!-- La acción apunta a .update pasando el ID del computador -->
            <form action="{{ route('computer.update', $computer->id) }}" method="POST">
                @csrf
                @method('PUT') <!-- Requerido para procesar la actualización en Laravel -->

                <!-- Sección: Especificaciones del Equipo -->
                <h5 class="text-success mb-3 border-bottom pb-2">📋 Especificaciones del Equipo</h5>

                <!-- Número de Computador -->
                <div class="mb-3">
                    <label class="form-label fw-bold text-muted">Número de Computador / Plaqueta:</label>
                    <input type="text"
                        name="number"
                        class="form-control shadow-sm @error('number') is-invalid @enderror"
                        value="{{ old('number', $computer->number) }}"
                        placeholder="Ej. COMP-012"
                        required>
                    @error('number')
                    <div class="invalid-feedback fw-bold">⚠️ {{ $message }}</div>
                    @enderror
                </div>

                <!-- Marca (Brand) -->
                <div class="mb-4">
                    <label class="form-label fw-bold text-muted">Marca (Brand):</label>
                    <input type="text"
                        name="brand"
                        class="form-control shadow-sm @error('brand') is-invalid @enderror"
                        value="{{ old('brand', $computer->brand) }}"
                        placeholder="Ej. HP, Lenovo, Dell"
                        required>
                    @error('brand')
                    <div class="invalid-feedback fw-bold">⚠️ {{ $message }}</div>
                    @enderror
                </div>

                <!-- Botón de Actualización -->
                <div class="text-end border-top pt-3">
                    <button type="submit" class="btn btn-success px-4 shadow" style="background-color: #39A900; border: none;">
                        💾 Actualizar Computador
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection