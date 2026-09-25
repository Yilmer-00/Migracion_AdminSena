@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 1100px; margin-top: 30px;">
    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-header text-white py-3 d-flex justify-content-between align-items-center" style="background-color: #39A900;">
            <h4 class="mb-0 fw-bold">📋 Evaluando Aspirantes: {{ $formacion->nombre }}</h4>
            <a href="{{ route('formaciones.index') }}" class="btn btn-light btn-sm text-success fw-bold">← Volver</a>
        </div>
        <div class="card-body p-4">
            <p class="text-muted mb-4"><strong>Centro de Formación:</strong> {{ $formacion->trainingCenter->nombre ?? 'N/A' }}</p>

            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Documento / Nombre</th>
                            <th>Correo</th>
                            <th>Ficha / Curso</th>
                            <th>Estado</th>
                            <th class="text-end">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $hasAspirantes = false; @endphp

                        @foreach($formacion->courses as $course)
                        @foreach($course->apprentices as $aspirante)
                        @php $hasAspirantes = true; @endphp
                        <tr>
                            <td class="fw-semibold">{{ $aspirante->nombre ?? 'Aspirante' }}</td>
                            <td>{{ $aspirante->email ?? 'N/A' }}</td>
                            <td><span class="badge bg-secondary">{{ $course->codigo }}</span></td>
                            <td><span class="badge bg-warning text-dark">Por Evaluar</span></td>
                            <td class="text-end">
                                {{-- Formulario para Aprobar --}}
                                <form action="{{ route('aspirante.aprobar', $aspirante->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-success btn-sm rounded-pill px-3">Aprobar</button>
                                </form>

                                {{-- Formulario para Rechazar --}}
                                <form action="{{ route('aspirante.rechazar', $aspirante->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm rounded-pill px-3">Rechazar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @endforeach

                        {{-- Mensaje si la lista está vacía --}}
                        @if(!$hasAspirantes)
                        <tr>
                            <td colspan="5" class="text-center py-4 text-muted">
                                🎉 No hay aspirantes pendientes por evaluar en esta formación.
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection