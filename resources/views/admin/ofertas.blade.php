@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 1100px; margin-top: 30px;">

    <!-- Encabezado y Acción -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold text-dark m-0">📢 Ofertas de Formación y Convocatorias</h3>
            <small class="text-muted">Monitoreo de demanda, aspirantes y estado de selección en tiempo real.</small>
        </div>
        <a href="{{ route('formaciones.create') }}" class="btn btn-success btn-sm shadow-sm" style="background-color: #39A900; border: none;">
            ➕ Registrar Nueva Oferta
        </a>
    </div>

    <!-- Cards de Ofertas Dinámicas -->
    <div class="row g-4">

        @forelse($formaciones as $formacion)
        <div class="col-12 col-lg-6">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header text-white py-3 d-flex justify-content-between align-items-center" style="background-color: #39A900;">
                    <h5 class="mb-0 fw-bold">{{ $formacion->nombre }}</h5>

                    {{-- Estado dinámico con insignia de color --}}
                    @if($formacion->estado == 'abierta')
                    <span class="badge bg-light text-success fw-bold">Convocatoria Abierta</span>
                    @elseif($formacion->estado == 'proxima')
                    <span class="badge bg-warning text-dark fw-bold">Próxima a Cerrar</span>
                    @else
                    <span class="badge bg-secondary text-white fw-bold">Cerrada</span>
                    @endif
                </div>

                <div class="card-body p-4">
                    <p class="text-muted small mb-3">
                        <strong>Código Principal:</strong> {{ $formacion->codigo }} |
                        <strong>Centro:</strong> {{ $formacion->trainingCenter->nombre ?? 'N/A' }}
                    </p>

                    <!-- Estadísticas Rápidas Dinámicas -->
                    <div class="row text-center g-2 mb-3">
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-info">{{ $formacion->total_interesados ?? 0 }}</span>
                                <small class="text-muted fw-semibold">👀 Interesados</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-success">{{ $formacion->total_inscritos ?? 0 }}</span>
                                <small class="text-muted fw-semibold">✍️ Inscritos</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-warning">{{ $formacion->total_por_evaluar ?? 0 }}</span>
                                <small class="text-muted fw-semibold">⏳ Por Evaluar</small>
                            </div>
                        </div>
                    </div>

                    <!-- Información de Área -->
                    <div class="mb-3 small text-muted">
                        <span><strong>Área:</strong> {{ $formacion->area->nombre ?? 'N/A' }}</span>
                    </div>

                    <!-- Botones de Acción -->
                    <div class="d-flex justify-content-end gap-2">
                        <a href="#" class="btn btn-outline-secondary btn-sm rounded-pill">Ver Métricas</a>
                        <a href="{{ route('formaciones.evaluar', $formacion->id) }}" class="btn btn-warning btn-sm text-dark fw-bold rounded-pill">
                            Evaluar Aspirantes ({{ $formacion->total_por_evaluar ?? 0 }})
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="alert alert-warning text-center py-4 rounded-3 shadow-sm">
                <h4 class="alert-heading fw-bold">⚠️ No hay formaciones registradas</h4>
                <p class="mb-2">Actualmente la base de datos no tiene ofertas activas para mostrar.</p>
                <hr>
                <p class="mb-0 text-muted small">Puedes poblar los datos ejecutando: <code>php artisan db:seed --class=FormacionSeeder</code></p>
            </div>
        </div>
        @endforelse

    </div>
</div>
@endsection