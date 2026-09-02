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
                        <span class="fs-2 text-success"></span>
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
                        <span class="fs-2" style="color: #00324d;"></span>
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
                        <span class="fs-2 text-warning"></span>
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
                        <span class="fs-2 text-info"></span>
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
                        <span class="fs-2" style="color: #6f42c1;"></span>
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
                        <span class="fs-2" style="color: #e83e8c;"></span>
                    </div>
                </div>
            </div>
            <a href="{{ route('offer.index') }}" class="btn text-white fw-bold px-4 py-2 rounded-pill shadow-sm" style="background-color: #39A900;">
                📢 Ver Ofertas de Formación
            </a>

        </div>

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
