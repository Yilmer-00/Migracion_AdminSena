@extends('layouts.app') {{-- O la plantilla padre que utilices --}}

@section('content')
<div class="container py-4">
    <!-- Encabezado de la Sección -->
    <div class="p-4 mb-4 rounded-3 text-white shadow-sm d-flex align-items-center justify-content-between" style="background-color: #39A900;">
        <div>
            <h2 class="fw-bold m-0">🔔 Centro de Alertas y Notificaciones</h2>
            <p class="m-0 text-white-50">Gestiona los avisos del sistema, mantenimientos y préstamos pendientes.</p>
        </div>
        <button class="btn btn-light text-success fw-bold rounded-pill shadow-sm">
            ✓ Marcar todas como leídas
        </button>
    </div>

    <!-- Filtros Rápidos -->
    <div class="d-flex gap-2 mb-4">
        <button class="btn btn-success rounded-pill px-3 active">Todas (3)</button>
        <button class="btn btn-outline-secondary rounded-pill px-3">Mantenimiento</button>
        <button class="btn btn-outline-secondary rounded-pill px-3">Equipos / Devoluciones</button>
        <button class="btn btn-outline-secondary rounded-pill px-3">Servidores</button>
    </div>

    <!-- Lista de Notificaciones -->
    <div class="row g-3">

        <!-- Alerta 1: Servidores -->
        <div class="col-12">
            <div class="card border-0 shadow-sm border-start border-4 border-dark rounded-3">
                <div class="card-body p-3 d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-dark text-white p-3 rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                            🖥️
                        </div>
                        <div>
                            <span class="badge bg-dark mb-1">Mantenimiento Programado</span>
                            <h6 class="fw-bold text-dark m-0">Actualización de Servidores de Base de Datos</h6>
                            <small class="text-muted">La plataforma estará en mantenimiento el sábado de 10:00 PM a 2:00 AM para optimización.</small>
                        </div>
                    </div>
                    <div class="text-end">
                        <span class="text-muted d-block small mb-2">Hace 2 horas</span>
                        <button class="btn btn-sm btn-outline-secondary rounded-pill">Archivar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Alerta 2: Devolución Pendiente -->
        <div class="col-12">
            <div class="card border-0 shadow-sm border-start border-4 border-danger rounded-3">
                <div class="card-body p-3 d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-danger text-white p-3 rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                            💻
                        </div>
                        <div>
                            <span class="badge bg-danger mb-1">Devolución Pendiente</span>
                            <h6 class="fw-bold text-dark m-0">Equipo PC-204 sin retornar</h6>
                            <small class="text-muted">El portatil asignado al ambiente de redes superó el tiempo límite de préstamo estipulado.</small>
                        </div>
                    </div>
                    <div class="text-end">
                        <span class="text-muted d-block small mb-2">Ayer</span>
                        <a href="{{ route('computer.index') }}" class="btn btn-sm btn-danger text-white rounded-pill">Ver Equipo</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Alerta 3: Mantenimiento de Equipos -->
        <div class="col-12">
            <div class="card border-0 shadow-sm border-start border-4 border-warning rounded-3">
                <div class="card-body p-3 d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-warning text-dark p-3 rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                            🛠️
                        </div>
                        <div>
                            <span class="badge bg-warning text-dark mb-1">Revisión Preventiva</span>
                            <h6 class="fw-bold text-dark m-0">Mantenimiento Preventivo de Computadores - Sala 3</h6>
                            <small class="text-muted">Se requiere inspección física y limpieza técnica de 15 equipos del centro.</small>
                        </div>
                    </div>
                    <div class="text-end">
                        <span class="text-muted d-block small mb-2">Hace 2 días</span>
                        <button class="btn btn-sm btn-outline-success rounded-pill">Marcar como Resuelto</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card border-0 shadow-sm border-start border-4 border-info rounded-3">
                <div class="card-body p-3 d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-info text-white p-3 rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                            👤
                        </div>
                        <div>
                            <span class="badge bg-info text-dark mb-1">Auditoría | Registro</span>
                            <h6 class="fw-bold text-dark m-0">Nuevo Aprendiz Registrado</h6>
                            <small class="text-muted">El usuario <strong>AdminSena</strong> registró al aprendiz <strong>Carlos Ruiz</strong> en el sistema.</small>
                        </div>
                    </div>
                    <div class="text-end">
                        <span class="text-muted d-block small mb-2">Hace 15 min</span>
                        <a href="{{ route('apprentice.index') }}" class="btn btn-sm btn-info text-white rounded-pill">Ver Aprendiz</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Auditoría 2: Edición / Modificación de Registro (Equipo PC) -->
        <div class="col-12">
            <div class="card border-0 shadow-sm border-start border-4 border-primary rounded-3">
                <div class="card-body p-3 d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-primary text-white p-3 rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                            📝
                        </div>
                        <div>
                            <span class="badge bg-primary mb-1">Auditoría | Edición</span>
                            <h6 class="fw-bold text-dark m-0">Modificación en Equipo PC-108</h6>
                            <small class="text-muted">El instructor <strong>Mario Ríos</strong> actualizó la ubicación del equipo al <strong>Ambiente de Software 1</strong>.</small>
                        </div>
                    </div>
                    <div class="text-end">
                        <span class="text-muted d-block small mb-2">Hace 1 hora</span>
                        <a href="{{ route('computer.index') }}" class="btn btn-sm btn-primary text-white rounded-pill">Ver Detalle</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Auditoría 3: Eliminación / Baja (Asignación o Curso) -->
        <div class="col-12">
            <div class="card border-0 shadow-sm border-start border-4 border-secondary rounded-3">
                <div class="card-body p-3 d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-secondary text-white p-3 rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                            🗑️
                        </div>
                        <div>
                            <span class="badge bg-secondary mb-1">Auditoría | Eliminación</span>
                            <h6 class="fw-bold text-dark m-0">Asignación Eliminada</h6>
                            <small class="text-muted">Se eliminó la asignación de la instructora <strong>Laura Pérez</strong> en la ficha seleccionada.</small>
                        </div>
                    </div>
                    <div class="text-end">
                        <span class="text-muted d-block small mb-2">Hace 3 horas</span>
                        <a href="{{ route('course_teacher.index') }}" class="btn btn-sm btn-secondary text-white rounded-pill">Ver Asignaciones</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ url('/home')}}" class="btn btn-success px-4 py-2" style="background-color: #39A900; border: none; border-radius: 8px;">
            Ir al home
        </a>
    </div>
</div>
@endsection
