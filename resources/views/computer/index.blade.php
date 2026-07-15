@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 900px; margin-top: 30px;">

    <!-- Botones de Navegación Rápida -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <span class="text-muted fw-bold">Módulo de Inventario PC</span>
        <a href="{{ route('computer.create') }}" class="btn btn-success btn-sm shadow-sm" style="background-color: #39A900; border: none;">
            ➕ Registrar Computador
        </a>
    </div>

    <!-- Alerta de Éxito -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm border-0 mb-4" role="alert" style="border-left: 5px solid #39A900 !important;">
            <strong>¡Éxito!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Tarjeta con la Tabla -->
    <div class="card shadow border-0">
        <!-- Encabezado con el Verde SENA -->
        <div class="card-header text-white py-3" style="background-color: #39A900;">
            <h4 class="mb-0 fw-bold">💻 Listado de Computadores</h4>
        </div>

        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-4 py-3 text-muted fw-bold" style="width: 10%;">ID</th>
                            <th class="py-3 text-muted fw-bold" style="width: 35%;">Número de PC</th>
                            <th class="py-3 text-muted fw-bold" style="width: 30%;">Marca</th>
                            <th class="py-3 text-center text-muted fw-bold" style="width: 25%;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($computers as $computer)
                            <tr>
                                <td class="ps-4 fw-bold text-secondary">{{ $computer->id }}</td>
                                <td class="fw-semibold text-dark">{{ $computer->number }}</td>
                                <td class="text-secondary">{{ $computer->brand }}</td>
                                <td class="pe-4 text-center">
                                    <div class="d-flex gap-2 justify-content-center">
                                        <!-- Botón Mostrar -->
                                        <a href="{{ route('computer.show', $computer->id) }}" class="btn btn-primary btn-sm shadow-sm">
                                            👁️ Mostrar
                                        </a>
                                        <!-- Botón Editar -->
                                        <a href="{{ route('computer.edit', $computer->id) }}" class="btn btn-warning btn-sm text-dark fw-semibold shadow-sm">
                                            ✏️ Editar
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <!-- Mensaje si la tabla está vacía -->
                            <tr>
                                <td colspan="4" class="text-center py-5 text-muted">
                                    <i class="fas fa-laptop fs-2 mb-3 d-block text-secondary"></i>
                                    No hay computadores registrados en el inventario.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection