@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 1000px; margin-top: 30px;">

    <!-- Encabezado de la Sección -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold text-dark m-0">🆔 Carnet Digital y Control de Acceso</h3>
            <small class="text-muted">Módulo independiente de identificación y registro mediante código QR.</small>
        </div>
        <button onclick="window.print()" class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm">
            🖨️ Imprimir Carnet
        </button>
    </div>

    <div class="row g-4 justify-content-center">

        <!-- Tarjeta del Carnet Digital SENA -->
        <div class="col-12 col-md-6 col-lg-5">
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden">

                <!-- Encabezado Verde SENA -->
                <div class="p-3 text-white text-center" style="background-color: #39A900;">
                    <span class="badge bg-white text-success fw-bold px-3 py-1 rounded-pill mb-1" style="font-size: 11px;">
                        SERVICIO NACIONAL DE APRENDIZAJE
                    </span>
                    <h5 class="fw-bold m-0 text-uppercase tracking-wide">Carnet Digital</h5>
                </div>

                <!-- Cuerpo del Carnet -->
                <div class="card-body p-4 text-center bg-white">

                    <!-- Avatar del Aprendiz -->
                    <div class="mb-3 position-relative d-inline-block">
                        <div class="rounded-circle bg-light border border-3 border-success d-flex align-items-center justify-content-center mx-auto shadow-sm" style="width: 90px; height: 90px;">
                            <span class="fs-1 fw-bold text-success">YM</span>
                        </div>
                    </div>

                    <!-- Datos Estáticos del Aprendiz -->
                    <h5 class="fw-bold text-dark mb-1">Yilmer Melenge</h5>
                    <p class="text-muted small mb-2">tecnologo</p>
                    <p class="text-muted small mb-2">Análisis y Desarrollo de Software</p>

                    <div class="d-flex justify-content-center gap-2 mb-3">
                        <span class="badge bg-light text-dark border">Ficha: 3223899</span>
                        <span class="badge bg-success text-white">Aprendiz SENA</span>
                    </div>

                    <hr class="my-3">

                    <!-- Código QR Dinámico (Generado por API gratuita mediante el ID) -->
                    <div class="p-3 bg-light rounded-3 d-inline-block border mb-2 shadow-sm">
                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=1002345678"
                             alt="Código QR de Acceso"
                             class="img-fluid rounded"
                             style="width: 130px; height: 130px;">
                    </div>

                    <p class="text-muted small m-0 fw-semibold" style="font-size: 11px;">
                        Doc. Identidad: 1058968457
                    </p>

                </div>

                <!-- Pie del Carnet -->
                <div class="card-footer bg-light text-center py-2 border-top-0">
                    <small class="text-muted" style="font-size: 10px;">
                        Regional Cauca | Centro de Comercio y Servicio
                    </small>
                </div>

            </div>
        </div>

        <!-- Simulador del Lector de Acceso a Ambientes -->
        <div class="col-12 col-md-6 col-lg-5">
            <div class="card shadow border-0 rounded-3 h-100">
                <div class="card-header bg-dark text-white py-3">
                    <h6 class="mb-0 fw-bold">📟 Simulador de Punto de Control (Ambientes)</h6>
                </div>
                <div class="card-body p-4 d-flex flex-column justify-content-between">
                    <div>
                        <p class="text-muted small mb-3">
                            Este panel simula la pantalla del escáner en la entrada de los laboratorios o aulas de formación.
                        </p>

                        <!-- Estado del Acceso -->
                        <div class="alert alert-success border-0 shadow-sm rounded-3 p-3 mb-3">
                            <div class="d-flex align-items-center gap-3">
                                <span class="fs-1">✅</span>
                                <div>
                                    <h6 class="fw-bold mb-0">ACCESO PERMITIDO</h6>
                                    <small class="d-block text-success fw-semibold">Ingreso registrado correctamente</small>
                                </div>
                            </div>
                        </div>

                        <!-- Detalles del Registro -->
                        <ul class="list-group list-group-flush border-top border-bottom mb-3 small">
                            <li class="list-group-item d-flex justify-content-between px-0 py-2">
                                <span class="text-muted">Ambiente:</span>
                                <span class="fw-bold text-dark">Software 202 - Ciudad Jardin</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between px-0 py-2">
                                <span class="text-muted">Hora de Ingreso:</span>
                                <span class="fw-bold text-dark">{{ date('H:i:s A') }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between px-0 py-2">
                                <span class="text-muted">Estado del Aprendiz:</span>
                                <span class="badge bg-success">Activo</span>
                            </li>
                        </ul>
                    </div>

                    <button class="btn btn-outline-dark btn-sm w-100 rounded-pill" onclick="alert('Simulación: Escaneando nuevo código QR...')">
                        🔄 Simular Escaneo Nuevo
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
