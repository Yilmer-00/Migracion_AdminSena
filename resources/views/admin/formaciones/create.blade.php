@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 700px; margin-top: 30px;">
    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-header text-white py-3" style="background-color: #39A900;">
            <h4 class="mb-0 fw-bold">➕ Registrar Nueva Oferta de Formación</h4>
        </div>
        <div class="card-body p-4">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('formaciones.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nombre" class="form-label fw-bold">Nombre del Programa</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej: Análisis y Desarrollo de Software (ADSO)" required>
                </div>

                <div class="mb-3">
                    <label for="codigo" class="form-label fw-bold">Código / Ficha Principal</label>
                    <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Ej: ADSO-2026" required>
                </div>

                <div class="mb-3">
                    <label for="area_id" class="form-label fw-bold">Área</label>
                    <select class="form-select" id="area_id" name="area_id" required>
                        <option value="">Seleccione un área...</option>
                        @foreach($areas as $area)
                        <option value="{{ $area->id }}">{{ $area->name }}</option> {{-- Cambiado a ->name --}}
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="training_center_id" class="form-label fw-bold">Centro de Formación</label>
                    <select class="form-select" id="training_center_id" name="training_center_id" required>
                        <option value="">Seleccione un centro...</option>
                        @foreach($trainingCenters as $center)
                        <option value="{{ $center->id }}">{{ $center->name }}</option> {{-- Cambiado a ->name --}}
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="estado" class="form-label fw-bold">Estado de la Convocatoria</label>
                    <select class="form-select" id="estado" name="estado" required>
                        <option value="abierta">Convocatoria Abierta</option>
                        <option value="proxima">Próxima a Cerrar</option>
                        <option value="cerrada">Cerrada</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label fw-bold">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Detalles del programa..."></textarea>
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('formaciones.index') }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn text-white" style="background-color: #39A900;">Guardar Oferta</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection