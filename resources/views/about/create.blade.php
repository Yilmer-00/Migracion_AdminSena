@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 1100px; margin-top: 30px; margin-bottom: 50px;">

    <!-- Banner de Encabezado Institucional -->
    <div class="card border-0 shadow-sm text-white mb-5" style="background: linear-gradient(135deg, #39A900 0%, #00324d 100%); border-radius: 15px;">
        <div class="card-body p-5 d-flex align-items-center justify-content-between flex-wrap gap-4">
            <div>
                <span class="badge bg-white text-success font-monospace px-3 py-2 mb-2 rounded-pill fw-bold">CONOCE NUESTRA PLATAFORMA</span>
                <h1 class="display-5 fw-bold mb-2">Sobre AdminSena</h1>
                <p class="lead mb-0 opacity-90">Transformando la gestión académica, el control de inventarios y la administración de ambientes de formación.</p>
            </div>
            <div class="fs-1 bg-white bg-opacity-20 p-4 rounded-circle d-flex align-items-center justify-content-center shadow-sm" style="width: 85px; height: 85px;">
                🏛️
            </div>
        </div>
    </div>

    <!-- Sección: Misión y Visión (Tarjetas con Borde Lateral) -->
    <h4 class="text-secondary fw-bold mb-4">🎯 Propósito Institucional</h4>
    <div class="row g-4 mb-5">

        <!-- Misión -->
        <div class="col-md-6">
            <div class="card h-100 border-0 shadow-sm p-4" style="border-left: 5px solid #39A900 !important; border-radius: 12px;">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <span class="fs-2">🚀</span>
                    <h4 class="fw-bold text-dark mb-0">Nuestra Misión</h4>
                </div>
                <p class="text-muted leading-relaxed mb-0">
                    Proporcionar una herramienta integral e intuitiva que optimice el registro y seguimiento de aprendices, instructores, fichas de formación y equipos tecnológicos, garantizando eficiencia y transparencia en los procesos administrativos del centro.
                </p>
            </div>
        </div>

        <!-- Visión -->
        <div class="col-md-6">
            <div class="card h-100 border-0 shadow-sm p-4" style="border-left: 5px solid #00324d !important; border-radius: 12px;">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <span class="fs-2">👁️</span>
                    <h4 class="fw-bold text-dark mb-0">Nuestra Visión</h4>
                </div>
                <p class="text-muted leading-relaxed mb-0">
                    Consolidarse como la plataforma de referencia para la gestión de ambientes de aprendizaje, adaptada a las necesidades tecnológicas del SENA y alineada con los estándares del desarrollo de software moderno.
                </p>
            </div>
        </div>

    </div>

    <!-- Sección: Cifras e Impacto (Métricas) -->
    <h4 class="text-secondary fw-bold mb-4">📈 Impacto del Sistema</h4>
    <div class="row g-4 mb-5">
        <div class="col-md-3 col-sm-6">
            <div class="card border-0 shadow-sm p-3 text-center" style="border-radius: 10px;">
                <span class="fs-1">🎒</span>
                <h3 class="fw-bold text-dark mt-2 mb-0">100%</h3>
                <span class="text-muted small fw-semibold">Control de Aprendices</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card border-0 shadow-sm p-3 text-center" style="border-radius: 10px;">
                <span class="fs-1">💻</span>
                <h3 class="fw-bold text-dark mt-2 mb-0">Real-Time</h3>
                <span class="text-muted small fw-semibold">Seguimiento de Inventario</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card border-0 shadow-sm p-3 text-center" style="border-radius: 10px;">
                <span class="fs-1">👨‍🏫</span>
                <h3 class="fw-bold text-dark mt-2 mb-0">Centralizado</h3>
                <span class="text-muted small fw-semibold">Gestión de Instructores</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card border-0 shadow-sm p-3 text-center" style="border-radius: 10px;">
                <span class="fs-1">⚡</span>
                <h3 class="fw-bold text-dark mt-2 mb-0">Optimizados</h3>
                <span class="text-muted small fw-semibold">Tiempos de Respuesta</span>
            </div>
        </div>
    </div>

    <!-- Sección: Valores del Proyecto -->
    <h4 class="text-secondary fw-bold mb-4">💡 Nuestros Valores y Principios</h4>
    <div class="row g-4 mb-5">

        <!-- Valor 1 -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 hover-shadow transition-all" style="border-radius: 12px;">
                <div class="card-body p-4 bg-white">
                    <div class="fs-3 text-success mb-2">🌿</div>
                    <h5 class="fw-bold text-dark mb-2">Eficiencia</h5>
                    <p class="text-muted small mb-0">Reducción de trámites manuales e interacción directa con los módulos clave de formación.</p>
                </div>
            </div>
        </div>

        <!-- Valor 2 -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 hover-shadow transition-all" style="border-radius: 12px;">
                <div class="card-body p-4 bg-white">
                    <div class="fs-3 mb-2" style="color: #00324d;">🔒</div>
                    <h5 class="fw-bold text-dark mb-2">Trazabilidad</h5>
                    <p class="text-muted small mb-0">Asignación clara de equipos a aprendices e instructores con datos organizados y seguros.</p>
                </div>
            </div>
        </div>

        <!-- Valor 3 -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 hover-shadow transition-all" style="border-radius: 12px;">
                <div class="card-body p-4 bg-white">
                    <div class="fs-3 text-warning mb-2">🤝</div>
                    <h5 class="fw-bold text-dark mb-2">Trabajo en Equipo</h5>
                    <p class="text-muted small mb-0">Desarrollado bajo una visión colaborativa para el beneficio directo de la comunidad SENA.</p>
                </div>
            </div>
        </div>

    </div>

    <!-- Banner Final de Contacto / Regreso -->
    <div class="card border-0 bg-white shadow-sm p-4 text-center" style="border-radius: 12px;">
        <h5 class="fw-bold text-dark mb-2">¿Necesitas regresar al panel de gestión?</h5>
        <p class="text-muted small mb-3">Accede directamente a los módulos principales para administrar el inventario y las fichas.</p>
        <div>
            <a href="{{ url('/home')}}" class="btn btn-success px-4 py-2" style="background-color: #39A900; border: none; border-radius: 8px;">
                Ir al home
            </a>
        </div>
    </div>

</div>

<!-- Estilos CSS -->
<style>
    .hover-shadow:hover {
        transform: translateY(-5px);
        box-shadow: 0 .5rem 1.5rem rgba(0,0,0,.08) !important;
    }
    .transition-all {
        transition: all 0.3s ease;
    }
</style>
@endsection
