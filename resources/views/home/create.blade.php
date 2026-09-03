@extends('layouts.app')

@section('content')
<!-- Banner Flotante / Carrusel de Anuncios -->
<div id="announcementContainer" class="position-relative mb-5" style="z-index: 100;">
    <div id="announcementCarousel" class="carousel slide shadow-lg text-white" data-bs-ride="carousel" style="border-radius: 16px; background: linear-gradient(135deg, #00324d 0%, #001e30 100%); border: 1px solid rgba(255, 255, 255, 0.1); overflow: hidden;">

        <!-- Botón para cerrar/descartar el anuncio -->
        <button type="button" onclick="document.getElementById('announcementContainer').remove()" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" style="z-index: 105; opacity: 0.8;" aria-label="Cerrar"></button>

        <!-- Indicadores (Puntos de navegación) -->
        <div class="carousel-indicators mb-2">
            <button type="button" data-bs-target="#announcementCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Anuncio 1"></button>
            <button type="button" data-bs-target="#announcementCarousel" data-bs-slide-to="1" aria-label="Anuncio 2"></button>
            <button type="button" data-bs-target="#announcementCarousel" data-bs-slide-to="2" aria-label="Anuncio 3"></button>
            <button type="button" data-bs-target="#announcementCarousel" data-bs-slide-to="3" aria-label="Anuncio 4"></button>
        </div>

        <!-- Diapositivas de Anuncios -->
        <div class="carousel-inner">

            <!-- Anuncio 1: Novedad -->
            <div class="carousel-item active" data-bs-interval="6000">
                <div class="p-4 p-md-5 d-flex align-items-center justify-content-between flex-wrap gap-4">
                    <div style="max-width: 650px;">
                        <span class="badge px-3 py-2 rounded-pill fw-bold mb-2" style="background-color: #39A900;">📢 NOVEDAD DEL SISTEMA</span>
                        <h3 class="fw-bold mb-2">¡Nuevo Módulo de Exportación de Reportes!</h3>
                        <p class="mb-0 text-white-50">Ahora puedes generar listas completas de computadores e instructores asignados directamente en Excel y PDF.</p>
                    </div>
                    <div>
                        <a href="{{ route('computer.index') }}" class="btn btn-outline-light rounded-pill px-4 py-2 hover-scale">
                            Ver Módulo
                        </a>
                    </div>
                </div>
            </div>

            <!-- Anuncio 2: Recordatorio Institucional -->
            <div class="carousel-item" data-bs-interval="6000">
                <div class="p-4 p-md-5 d-flex align-items-center justify-content-between flex-wrap gap-4">
                    <div style="max-width: 650px;">
                        <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-2">⚠️ ATENCIÓN INSTRUCTORES</span>
                        <h3 class="fw-bold mb-2">Cierre de Registro de Fichas</h3>
                        <p class="mb-0 text-white-50">Recuerda verificar que todos los aprendices vinculados a tu formación estén registrados correctamente en el sistema.</p>
                    </div>
                    <div>
                        <a href="{{ route('course.index') }}" class="btn btn-outline-light rounded-pill px-4 py-2 hover-scale">
                            Revisar Fichas
                        </a>
                    </div>
                </div>
            </div>

            <!-- Anuncio 3: Mantenimiento / Aviso general -->
            <div class="carousel-item" data-bs-interval="6000">
                <div class="p-4 p-md-5 d-flex align-items-center justify-content-between flex-wrap gap-4">
                    <div style="max-width: 650px;">
                        <span class="badge bg-info text-dark px-3 py-2 rounded-pill fw-bold mb-2">🔔 MANTENIMIENTO PROGRAMADO</span>
                        <h3 class="fw-bold mb-2">Actualización de Servidores</h3>
                        <p class="mb-0 text-white-50">La plataforma estará en mantenimiento el sábado de 10:00 PM a 2:00 AM para optimización de la base de datos.</p>
                    </div>
                    <div>
                        <span class="badge bg-white bg-opacity-10 text-white px-3 py-2 rounded-pill border border-white border-opacity-25">
                            Sábado 10:00 PM
                        </span>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="6000">
                <div class="p-4 p-md-5 d-flex align-items-center justify-content-between flex-wrap gap-4">
                    <div style="max-width: 650px;">
                        <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-2">
                            📢 CONVOCATORIAS ABIERTAS
                        </span>
                        <h3 class="fw-bold mb-2">Descubre las Ofertas de Formación</h3>
                        <p class="mb-0 text-white-50">
                            Explora los programas disponibles, consulta estadísticas de aspirantes en tiempo real y monitorea los cupos de cada ficha.
                        </p>
                    </div>
                    <div>
                        <a href="{{ route('offer.index') }}" class="btn btn-outline-light rounded-pill px-4 py-2 hover-scale">
                            Ver Ofertas
                        </a>
                    </div>
                </div>

            </div>

            <!-- Flechas de Control (Anterior / Siguiente) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#announcementCarousel" data-bs-slide="prev" style="width: 5%;">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#announcementCarousel" data-bs-slide="next" style="width: 5%;">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>

    <!-- Estilos opcionales para efectos visuales -->
    <style>
        #announcementCarousel {
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.18) !important;
            transition: transform 0.3s ease;
        }

        .hover-scale {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .hover-scale:hover {
            transform: scale(1.05);
        }
    </style>
   <!-- CDN opcional si no tienes cargado Bootstrap Icons en tu Layout principal -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
    :root {
        --sena-green: #39A900;
        --sena-blue: #00324D;
        --sena-gray: #F8F9FA;
    }
    
    .sena-bg-green { background-color: var(--sena-gray) !important; }
    .sena-bg-blue { background-color: var(--sena-gray) !important; }
    .sena-text-green { color: var(--sena-green) !important; }
    .sena-text-blue { color: var(--sena-blue) !important; }
    
    /* Efecto Hover para Tarjetas de Acceso */
    .card-hover {
        transition: transform 0.25s ease, box-shadow 0.25s ease;
        border: 1px solid rgba(0, 0, 0, 0.08);
    }
    .card-hover:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08) !important;
    }

    /* Botón verde institucional */
    .btn-sena {
        background-color: var(--sena-green);
        color: #fff;
        border: none;
        transition: background-color 0.2s ease;
    }
    .btn-sena:hover {
        background-color: #2f8c00;
        color: #fff;
    }

    /* Botón azul institucional */
    .btn-outline-sena {
        color: var(--sena-blue);
        border-color: var(--sena-blue);
    }
    .btn-outline-sena:hover {
        background-color: var(--sena-blue);
        color: #fff;
    }
</style>

<div class="container my-4" style="max-width: 1140px;">

    <!-- Banner de Bienvenida Institucional -->
    <div class="card border-0 shadow-sm text-white mb-4 overflow-hidden" 
         style="background: linear-gradient(135deg, var(--sena-blue) 0%, #001f31 60%, var(--sena-green) 100%); border-radius: 16px;">
        <div class="card-body p-4 p-md-5 d-flex align-items-center justify-content-between flex-wrap gap-3">
            <div>
                <span class="badge bg-white text-dark fw-bold px-3 py-2 rounded-pill mb-2 shadow-sm" style="font-size: 0.8rem;">
                    🟢 SENA — Sistema de Gestión
                </span>
                <h1 class="display-6 fw-bold mb-2">
                    ¡Bienvenido, {{ auth()->user()->name ?? 'Administrador' }}!
                </h1>
                <p class="mb-0 text-white-50 fs-6" style="max-width: 600px;">
                    Plataforma AdminSena para el control de inventario de equipos, aprendices, instructores y ambientes de formación.
                </p>
            </div>
            <div class="d-flex align-items-center gap-3">
                
                <a href="{{ route('offer.index') }}" class="btn btn-sena btn-lg fw-bold px-4 py-2.5 rounded-pill shadow">
                    <i class="bi bi-megaphone-fill me-2"></i>Ofertas de Formación
                </a>
            </div>
        </div>
    </div>

    <!-- Sección: Resumen de Métricas -->
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h5 class="fw-bold text-dark mb-0">
            <i class="bi bi-bar-chart-line-fill sena-text-green me-2"></i>Estado del Sistema
        </h5>
    </div>

    <div class="row g-3 mb-5">
        <!-- Aprendices -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card border-0 shadow-sm h-100 p-3 card-hover" style="border-left: 4px solid var(--sena-green) !important; border-radius: 12px;">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted fw-semibold small d-block">Aprendices</span>
                        <h3 class="fw-bold text-dark mb-0 mt-1">{{ $totalAprendices ?? '0' }}</h3>
                        <small class="text-success fw-bold"><i class="bi bi-check-circle-fill"></i> Activos</small>
                    </div>
                    <div class="rounded-circle p-3 sena-bg-green bg-opacity-10 sena-text-green">
                        <i class="bi bi-people-fill fs-3"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instructores -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card border-0 shadow-sm h-100 p-3 card-hover" style="border-left: 4px solid var(--sena-blue) !important; border-radius: 12px;">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted fw-semibold small d-block">Instructores</span>
                        <h3 class="fw-bold text-dark mb-0 mt-1">{{ $totalInstructores ?? '0' }}</h3>
                        <small class="sena-text-blue fw-bold"><i class="bi bi-person-badge-fill"></i> Asignados</small>
                    </div>
                    <div class="rounded-circle p-3 sena-bg-blue bg-opacity-10 sena-text-blue">
                        <i class="bi bi-person-workspace fs-3"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cursos / Fichas -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card border-0 shadow-sm h-100 p-3 card-hover" style="border-left: 4px solid #ffc107 !important; border-radius: 12px;">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted fw-semibold small d-block">Cursos / Fichas</span>
                        <h3 class="fw-bold text-dark mb-0 mt-1">{{ $totalFichas ?? '0' }}</h3>
                        <small class="text-warning fw-bold"><i class="bi bi-journal-check"></i> Registrados</small>
                    </div>
                    <div class="rounded-circle p-3 bg-warning bg-opacity-10 text-warning">
                        <i class="bi bi-journal-bookmark-fill fs-3"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Computadores -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card border-0 shadow-sm h-100 p-3 card-hover" style="border-left: 4px solid #0dcaf0 !important; border-radius: 12px;">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted fw-semibold small d-block">Inventario PC</span>
                        <h3 class="fw-bold text-dark mb-0 mt-1">{{ $totalEquipos ?? '0' }}</h3>
                        <small class="text-info fw-bold"><i class="bi bi-pc-display"></i> Equipos</small>
                    </div>
                    <div class="rounded-circle p-3 bg-info bg-opacity-10 text-info">
                        <i class="bi bi-laptop fs-3"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Áreas -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card border-0 shadow-sm h-100 p-3 card-hover" style="border-left: 4px solid #6f42c1 !important; border-radius: 12px;">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted fw-semibold small d-block">Áreas</span>
                        <h3 class="fw-bold text-dark mb-0 mt-1">{{ $totalAreas ?? '0' }}</h3>
                        <small class="text-purple fw-bold" style="color: #6f42c1;"><i class="bi bi-diagram-3-fill"></i> Especialidades</small>
                    </div>
                    <div class="rounded-circle p-3 bg-opacity-10" style="background-color: rgba(111, 66, 193, 0.1); color: #6f42c1;">
                        <i class="bi bi-diagram-3 fs-3"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Centros -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card border-0 shadow-sm h-100 p-3 card-hover" style="border-left: 4px solid #d63384 !important; border-radius: 12px;">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted fw-semibold small d-block">Sedes</span>
                        <h3 class="fw-bold text-dark mb-0 mt-1">{{ $totalCentros ?? '0' }}</h3>
                        <small class="fw-bold" style="color: #d63384;"><i class="bi bi-geo-alt-fill"></i> Centros</small>
                    </div>
                    <div class="rounded-circle p-3 bg-opacity-10" style="background-color: rgba(214, 51, 132, 0.1); color: #d63384;">
                        <i class="bi bi-building fs-3"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección: Accesos Rápidos -->
    <h5 class="fw-bold text-dark mb-3">
        <i class="bi bi-grid-fill sena-text-blue me-2"></i>Panel de Accesos Rápidos
    </h5>

    <div class="row g-4">
        <!-- Aprendices -->
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100 card-hover" style="border-radius: 14px;">
                <div class="card-body p-4 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center gap-2 mb-2" pt-3>
                            <i class="bi bi-people sena-text-green fs-4"></i>
                            <h6 class="fw-bold text-dark mb-0 fs-5">Aprendices</h6>
                        </div>
                        <p class="text-muted small mb-0">Administra datos personales, asignación de computadores y fichas asociadas.</p>
                    </div>
                    <div class="d-flex gap-2 mt-4 pt-3 border-top">
                        <a href="{{ route('apprentice.index') }}" class="btn btn-outline-sena btn-sm w-100 rounded-2 fw-semibold">Ver Listado</a>
                        <a href="{{ route('apprentice.registro') }}" class="btn btn-sena btn-sm w-100 rounded-2 fw-semibold"><i class="bi bi-plus-lg me-1"></i>Registrar</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cursos / Fichas -->
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100 card-hover" style="border-radius: 14px;">
                <div class="card-body p-4 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <i class="bi bi-journal-bookmark sena-text-green fs-4"></i>
                            <h6 class="fw-bold text-dark mb-0 fs-5">Cursos y Fichas</h6>
                        </div>
                        <p class="text-muted small mb-0">Organiza las fichas de formación, jornadas de estudio, áreas técnicas y centros.</p>
                    </div>
                    <div class="d-flex gap-2 mt-4 pt-3 border-top">
                        <a href="{{ route('course.index') }}" class="btn btn-outline-sena btn-sm w-100 rounded-2 fw-semibold">Ver Listado</a>
                        <a href="{{ route('course.registro') }}" class="btn btn-sena btn-sm w-100 rounded-2 fw-semibold"><i class="bi bi-plus-lg me-1"></i>Registrar</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instructores -->
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100 card-hover" style="border-radius: 14px;">
                <div class="card-body p-4 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <i class="bi bi-person-workspace sena-text-green fs-4"></i>
                            <h6 class="fw-bold text-dark mb-0 fs-5">Instructores</h6>
                        </div>
                        <p class="text-muted small mb-0">Controla el personal docente, correos de contacto, especialidad y vinculación.</p>
                    </div>
                    <div class="d-flex gap-2 mt-4 pt-3 border-top">
                        <a href="{{ route('teacher.index') }}" class="btn btn-outline-sena btn-sm w-100 rounded-2 fw-semibold">Ver Listado</a>
                        <a href="{{ route('teacher.create') }}" class="btn btn-sena btn-sm w-100 rounded-2 fw-semibold"><i class="bi bi-plus-lg me-1"></i>Registrar</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Computadores -->
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100 card-hover" style="border-radius: 14px;">
                <div class="card-body p-4 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <i class="bi bi-pc-display sena-text-green fs-4"></i>
                            <h6 class="fw-bold text-dark mb-0 fs-5">Inventario Equipos</h6>
                        </div>
                        <p class="text-muted small mb-0">Registra marcas y números de placa para el control de los equipos institucionales.</p>
                    </div>
                    <div class="d-flex gap-2 mt-4 pt-3 border-top">
                        <a href="{{ route('computer.index') }}" class="btn btn-outline-sena btn-sm w-100 rounded-2 fw-semibold">Ver Listado</a>
                        <a href="{{ route('computer.create') }}" class="btn btn-sena btn-sm w-100 rounded-2 fw-semibold"><i class="bi bi-plus-lg me-1"></i>Registrar</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Áreas -->
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100 card-hover" style="border-radius: 14px;">
                <div class="card-body p-4 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <i class="bi bi-diagram-3 sena-text-green fs-4"></i>
                            <h6 class="fw-bold text-dark mb-0 fs-5">Áreas de Formación</h6>
                        </div>
                        <p class="text-muted small mb-0">Define las áreas tecnológicas y programas académicos (Sistemas, Diseño, etc.).</p>
                    </div>
                    <div class="d-flex gap-2 mt-4 pt-3 border-top">
                        <a href="{{ route('area.index') }}" class="btn btn-outline-sena btn-sm w-100 rounded-2 fw-semibold">Ver Listado</a>
                        <a href="{{ route('area.create') }}" class="btn btn-sena btn-sm w-100 rounded-2 fw-semibold"><i class="bi bi-plus-lg me-1"></i>Registrar</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Centros de Formación -->
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100 card-hover" style="border-radius: 14px;">
                <div class="card-body p-4 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <i class="bi bi-building sena-text-green fs-4"></i>
                            <h6 class="fw-bold text-dark mb-0 fs-5">Centros de Formación</h6>
                        </div>
                        <p class="text-muted small mb-0">Administra las sedes físicas de la institución y sus ubicaciones geográficas.</p>
                    </div>
                    <div class="d-flex gap-2 mt-4 pt-3 border-top">
                        <a href="{{ route('trainig-center.index') }}" class="btn btn-outline-sena btn-sm w-100 rounded-2 fw-semibold">Ver Listado</a>
                        <a href="{{ route('trainig-center.create') }}" class="btn btn-sena btn-sm w-100 rounded-2 fw-semibold"><i class="bi bi-plus-lg me-1"></i>Registrar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
<style>
    .hover-shadow:hover {
        transform: translateY(-5px);
        box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .08) !important;
    }

    .transition-all {
        transition: all 0.3s ease;
    }
</style>
@endsection
