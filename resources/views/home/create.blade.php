@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 1100px; margin-top: 30px; margin-bottom: 50px;">

    <!-- Banner de Bienvenida Institucional -->
    <div class="card border-0 shadow-sm text-white mb-5" style="background: linear-gradient(135deg, #39A900 0%, #2f8c00 100%); border-radius: 15px;">
        <div class="card-body p-5 d-flex align-items-center justify-content-between flex-wrap gap-4">
            <div>
                <h1 class="display-5 fw-bold mb-2">¡Bienvenido a AdminSena!</h1>
                <p class="lead mb-0 opacity-90">Sistema de gestión de inventarios, aprendices, instructores y ambientes de formación.</p>
            </div>
            <div class="fs-1 bg-white bg-opacity-20 p-4 rounded-circle d-flex align-items-center justify-content-center shadow-sm" style="width: 80px; height: 80px;">
                🏢
            </div>
        </div>
    </div>

    <!-- Sección: Resumen de Métricas (Tarjetas Rápidas) -->
    <h4 class="text-secondary fw-bold mb-4">📊 Estado del Sistema (Métricas)</h4>
    <div class="row g-4 mb-5">
        <!-- Aprendices -->
        <div class="col-md-4 col-sm-6">
            <div class="card h-100 border-0 shadow-sm p-3" style="border-left: 5px solid #39A900 !important; border-radius: 10px;">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted fw-semibold d-block mb-1">Aprendices</span>
                        <h3 class="fw-bold mb-0 text-dark">Activos</h3>
                    </div>
                    <span class="fs-2 text-success">🎒</span>
                </div>
            </div>
        </div>

        <!-- Instructores -->
        <div class="col-md-4 col-sm-6">
            <div class="card h-100 border-0 shadow-sm p-3" style="border-left: 5px solid #00324d !important; border-radius: 10px;">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted fw-semibold d-block mb-1">Instructores</span>
                        <h3 class="fw-bold mb-0 text-dark">Asignados</h3>
                    </div>
                    <span class="fs-2" style="color: #00324d;">👨‍🏫</span>
                </div>
            </div>
        </div>

        <!-- Cursos / Fichas -->
        <div class="col-md-4 col-sm-6">
            <div class="card h-100 border-0 shadow-sm p-3" style="border-left: 5px solid #ffc107 !important; border-radius: 10px;">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted fw-semibold d-block mb-1">Cursos / Fichas</span>
                        <h3 class="fw-bold mb-0 text-dark">Registrados</h3>
                    </div>
                    <span class="fs-2 text-warning">📋</span>
                </div>
            </div>
        </div>

        <!-- Computadores -->
        <div class="col-md-4 col-sm-6">
            <div class="card h-100 border-0 shadow-sm p-3" style="border-left: 5px solid #17a2b8 !important; border-radius: 10px;">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted fw-semibold d-block mb-1">Inventario PC</span>
                        <h3 class="fw-bold mb-0 text-dark">Equipos</h3>
                    </div>
                    <span class="fs-2 text-info">💻</span>
                </div>
            </div>
        </div>

        <!-- Áreas -->
        <div class="col-md-4 col-sm-6">
            <div class="card h-100 border-0 shadow-sm p-3" style="border-left: 5px solid #6f42c1 !important; border-radius: 10px;">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted fw-semibold d-block mb-1">Áreas</span>
                        <h3 class="fw-bold mb-0 text-dark">Especialidades</h3>
                    </div>
                    <span class="fs-2" style="color: #6f42c1;">📂</span>
                </div>
            </div>
        </div>

        <!-- Centros -->
        <div class="col-md-4 col-sm-6">
            <div class="card h-100 border-0 shadow-sm p-3" style="border-left: 5px solid #e83e8c !important; border-radius: 10px;">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted fw-semibold d-block mb-1">Sedes</span>
                        <h3 class="fw-bold mb-0 text-dark">Centros</h3>
                    </div>
                    <span class="fs-2" style="color: #e83e8c;">🏢</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección: Accesos Directos a Módulos -->
    <h4 class="text-secondary fw-bold mb-4">🚀 Panel de Accesos Rápidos</h4>
    <div class="row g-4">
        
        <!-- Tarjeta Acceso: Aprendices -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 hover-shadow transition-all" style="border-radius: 12px; overflow: hidden;">
                <div class="card-body p-4 bg-white d-flex flex-column justify-content-between">
                    <div>
                        <h5 class="fw-bold text-dark mb-2">Gestión de Aprendices</h5>
                        <p class="text-muted small">Administra los datos personales de los estudiantes, asignación de computadores y fichas asociadas.</p>
                    </div>
                    <div class="d-flex gap-2 mt-3 pt-3 border-top">
                        <a href="{{ route('apprentice.index') }}" class="btn btn-outline-success btn-sm w-100">Ver Listado</a>
                        <a href="{{ route('apprentice.registro') }}" class="btn btn-success btn-sm w-100" style="background-color: #39A900; border: none;">Registrar</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tarjeta Acceso: Cursos -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 hover-shadow transition-all" style="border-radius: 12px; overflow: hidden;">
                <div class="card-body p-4 bg-white d-flex flex-column justify-content-between">
                    <div>
                        <h5 class="fw-bold text-dark mb-2">Cursos y Fichas</h5>
                        <p class="text-muted small">Organiza las fichas de formación, jornadas de estudio, áreas técnicas y centros responsables.</p>
                    </div>
                    <div class="d-flex gap-2 mt-3 pt-3 border-top">
                        <a href="{{ route('course.index') }}" class="btn btn-outline-success btn-sm w-100">Ver Listado</a>
                        <a href="{{ route('course.registro') }}" class="btn btn-success btn-sm w-100" style="background-color: #39A900; border: none;">Registrar</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tarjeta Acceso: Instructores -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 hover-shadow transition-all" style="border-radius: 12px; overflow: hidden;">
                <div class="card-body p-4 bg-white d-flex flex-column justify-content-between">
                    <div>
                        <h5 class="fw-bold text-dark mb-2">Instructores</h5>
                        <p class="text-muted small">Controla el personal docente, sus correos de contacto, especialidad y vincula su labor a las fichas.</p>
                    </div>
                    <div class="d-flex gap-2 mt-3 pt-3 border-top">
                        <a href="{{ route('teacher.index') }}" class="btn btn-outline-success btn-sm w-100">Ver Listado</a>
                        <a href="{{ route('teacher.create') }}" class="btn btn-success btn-sm w-100" style="background-color: #39A900; border: none;">Registrar</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tarjeta Acceso: Computadores -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 hover-shadow transition-all" style="border-radius: 12px; overflow: hidden;">
                <div class="card-body p-4 bg-white d-flex flex-column justify-content-between">
                    <div>
                        <h5 class="fw-bold text-dark mb-2">Inventario de Equipos</h5>
                        <p class="text-muted small">Registra marcas y números de plaqueta para mantener el control de los computadores de la institución.</p>
                    </div>
                    <div class="d-flex gap-2 mt-3 pt-3 border-top">
                        <a href="{{ route('computer.index') }}" class="btn btn-outline-success btn-sm w-100">Ver Listado</a>
                        <a href="{{ route('computer.create') }}" class="btn btn-success btn-sm w-100" style="background-color: #39A900; border: none;">Registrar</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tarjeta Acceso: Áreas -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 hover-shadow transition-all" style="border-radius: 12px; overflow: hidden;">
                <div class="card-body p-4 bg-white d-flex flex-column justify-content-between">
                    <div>
                        <h5 class="fw-bold text-dark mb-2">Áreas de Formación</h5>
                        <p class="text-muted small">Define las diferentes tecnologías y programas académicos (Sistemas, Diseño, Contabilidad, etc.).</p>
                    </div>
                    <div class="d-flex gap-2 mt-3 pt-3 border-top">
                        <a href="{{ route('area.index') }}" class="btn btn-outline-success btn-sm w-100">Ver Listado</a>
                        <a href="{{ route('area.create') }}" class="btn btn-success btn-sm w-100" style="background-color: #39A900; border: none;">Registrar</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tarjeta Acceso: Centros de Formación -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 hover-shadow transition-all" style="border-radius: 12px; overflow: hidden;">
                <div class="card-body p-4 bg-white d-flex flex-column justify-content-between">
                    <div>
                        <h5 class="fw-bold text-dark mb-2">Centros de Formación</h5>
                        <p class="text-muted small">Crea y edita los centros físicos de capacitación institucional junto con sus ubicaciones geográficas.</p>
                    </div>
                    <div class="d-flex gap-2 mt-3 pt-3 border-top">
                        <a href="{{ route('trainig-center.index') }}" class="btn btn-outline-success btn-sm w-100">Ver Listado</a>
                        <a href="{{ route('trainig-center.create') }}" class="btn btn-success btn-sm w-100" style="background-color: #39A900; border: none;">Registrar</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Estilo CSS Adicional para efectos visuales (Opcional) -->
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