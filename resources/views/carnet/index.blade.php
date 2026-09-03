@extends('layouts.app')

@section('content')
        <h2 class="h4 text-dark mb-0 fw-bold">
            Carnet Digital SENA
        </h2>
    </x-slot>

    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <!-- Tarjeta Carnet Digital -->
                <div class="card shadow-lg border-0 overflow-hidden rounded-4" style="border-top: 6px solid #39A900 !important;">

                    <!-- Encabezado SENA -->
                    <div class="p-3 text-white d-flex align-items-center justify-content-between" style="background-color: #00324D;">
                        <div class="d-flex align-items-center gap-2">
                            <div class="bg-white p-1 rounded-circle d-flex align-items-center justify-content-center fw-bold text-success" style="width: 38px; height: 38px; font-size: 1.1rem; color: #39A900 !important;">
                                S
                            </div>
                            <div>
                                <h6 class="mb-0 fw-bold text-uppercase" style="letter-spacing: 1px;">SENA</h6>
                                <small class="text-light opacity-75" style="font-size: 0.75rem;">Servicio Nacional de Aprendizaje</small>
                            </div>
                        </div>
                        <span class="badge px-3 py-2 rounded-pill fw-semibold text-white" style="background-color: #39A900;">
                            {{ session('user.role', 'Aprendiz') }}
                        </span>
                    </div>

                    <!-- Cuerpo del Carnet -->
                    <div class="card-body text-center p-4 bg-white">
                        <!-- Avatar / Perfil -->
                        <div class="position-relative d-inline-block mb-3">
                            <div class="rounded-circle border border-4 overflow-hidden shadow-sm d-flex align-items-center justify-content-center mx-auto bg-light" style="width: 100px; height: 100px; border-color: #39A900 !important;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="#00324D" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                </svg>
                            </div>
                        </div>

                        <!-- Datos del Usuario -->
                        <h4 class="fw-bold text-dark mb-1">
                            {{ session('user.name', 'Yilmer Melenge') }}
                        </h4>
                        <p class="text-muted small mb-3">
                            {{ session('user.email', 'aprendiz@sena.edu.co') }}
                        </p>

                        <!-- Detalles Institucionales -->
                        <div class="bg-light p-3 rounded-3 text-start mb-3 border">
                            <div class="row g-2 text-dark" style="font-size: 0.875rem;">
                                <div class="col-6">
                                    <span class="text-muted d-block small">Rol Asignado:</span>
                                    <strong>{{ session('user.role', 'Aprendiz') }}</strong>
                                </div>
                                <div class="col-6">
                                    <span class="text-muted d-block small">Estado:</span>
                                    <span class="badge bg-success-subtle text-success border border-success px-2 py-1">Activo</span>
                                </div>
                                <div class="col-12 mt-2 pt-2 border-top">
                                    <span class="text-muted d-block small">Centro de Formación:</span>
                                    <strong>Centro de Comercio y Servicios - Regional Cauca</strong>
                                </div>
                            </div>
                        </div>

                        <!-- Verificación QR -->
                        <div class="p-3 bg-light rounded-3 border d-flex align-items-center justify-content-between">
                            <div class="text-start">
                                <span class="d-block text-muted" style="font-size: 0.75rem;">Código de Validación:</span>
                                <code class="fw-bold text-dark">SENA-2026-OK</code>
                            </div>
                            <img src="https://api.qrserver.com/v1/create-qr-code/?size=60x60&data=CarnetSENA-{{ session('user.name', 'User') }}" alt="QR Carnet" class="rounded border p-1 bg-white" width="55" height="55">
                        </div>
                    </div>

                    <!-- Acciones -->
                    <div class="card-footer bg-light p-3 text-center border-0 d-flex justify-content-center gap-2">
                        <button onclick="window.print()" class="btn btn-sm btn-outline-secondary">
                            Imprimir Carnet
                        </button>
                        <a href="{{ url('/') }}" class="btn btn-sm text-white" style="background-color: #00324D;">
                            Ir al Inicio
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection