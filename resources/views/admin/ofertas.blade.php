@forelse($formaciones as $formacion)

<div class="oferta-card">

    {{-- Encabezado --}}
    <div class="header-oferta">
        <h2>
            {{ $formacion->nombre ?? 'Formación sin nombre' }}
        </h2>

        @if($formacion->estado)
        <span class="badge {{ strtolower($formacion->estado) }}">
            {{ ucfirst($formacion->estado) }}
        </span>
        @else
        <span class="badge">
            Sin estado
        </span>
        @endif
    </div>


    {{-- Información de la formación --}}
    <div class="info-oferta">

        <p>
            <strong>Fichas Asociadas:</strong>

            @forelse($formacion->courses ?? [] as $course)

            <span class="badge-ficha">
                {{ $course->codigo ?? 'Sin código' }}
            </span>

            @empty

            <span>
                No hay fichas asociadas
            </span>

            @endforelse
        </p>


        <p>
            <strong>Centro:</strong>

            {{ $formacion->trainingCenter->nombre ?? 'N/A' }}
        </p>

    </div>


    {{-- Métricas --}}
    <div class="metrics-grid">

        <div class="metric-box">
            <span class="number">
                {{ $formacion->total_interesados ?? 0 }}
            </span>

            <span class="label">
                Interesados
            </span>
        </div>


        <div class="metric-box">
            <span class="number">
                {{ $formacion->total_inscritos ?? 0 }}
            </span>

            <span class="label">
                Inscritos
            </span>
        </div>


        <div class="metric-box">
            <span class="number">
                {{ $formacion->total_por_evaluar ?? 0 }}
            </span>

            <span class="label">
                Por Evaluar
            </span>
        </div>

    </div>


    {{-- Acciones --}}
    <div class="acciones-oferta">

        @if(Route::has('formaciones.show'))

        <a
            href="{{ route('formaciones.show', ['id' => $formacion->id]) }}"
            class="btn-metricas">
            Ver Métricas
        </a>

        @endif


        <a
            href="#"
            class="btn-evaluar">
            Evaluar Aspirantes
            ({{ $formacion->total_por_evaluar ?? 0 }})
        </a>

    </div>

</div>

@empty

<div class="alerta-sin-formaciones">
    <p>
        No hay formaciones disponibles.
    </p>
</div>

@endforelse