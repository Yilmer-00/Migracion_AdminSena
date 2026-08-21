@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 1100px; margin-top: 30px;">

    <!-- Encabezado y Acción -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold text-dark m-0">📢 Ofertas de Formación y Convocatorias</h3>
            <small class="text-muted">Monitoreo de demanda, aspirantes y estado de selección en tiempo real.</small>
        </div>
        <a href="{{ route('area.create') }}" class="btn btn-success btn-sm shadow-sm" style="background-color: #39A900; border: none;">
            ➕ Registrar Nueva Área
        </a>
    </div>

    <!-- Cards de Ofertas -->
    <div class="row g-4">

        <!-- Oferta 1 -->
        <div class="col-12 col-lg-6">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header text-white py-3 d-flex justify-content-between align-items-center" style="background-color: #39A900;">
                    <h5 class="mb-0 fw-bold">Análisis y Desarrollo de Software (ADSO)</h5>
                    <span class="badge bg-light text-success fw-bold">Convocatoria Abierta</span>
                </div>
                <div class="card-body p-4">
                    <p class="text-muted small mb-3"><strong>Ficha / Código:</strong> 2670142 | <strong>Cupos disponibles:</strong> 30</p>

                    <!-- Estadísticas Rápidas -->
                    <div class="row text-center g-2 mb-3">
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-info">120</span>
                                <small class="text-muted fw-semibold">👀 Interesados</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-success">45</span>
                                <small class="text-muted fw-semibold">✍️ Inscritos</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-warning">18</span>
                                <small class="text-muted fw-semibold">⏳ Por Evaluar</small>
                            </div>
                        </div>
                    </div>

                    <!-- Barra de Progreso de Cupos -->
                    <div class="mb-3">
                        <div class="d-flex justify-content-between small text-muted mb-1">
                            <span>Ocupación de cupos (Inscritos vs Cupos)</span>
                            <span class="fw-bold text-dark">150% (Sobredemandado)</span>
                        </div>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="#" class="btn btn-outline-secondary btn-sm rounded-pill">Ver Métricas</a>
                        <a href="#" class="btn btn-warning btn-sm text-dark fw-bold rounded-pill">Evaluar Aspirantes (18)</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Oferta 2 -->
        <div class="col-12 col-lg-6">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header text-white py-3 d-flex justify-content-between align-items-center" style="background-color: #39A900;">
                    <h5 class="mb-0 fw-bold">Gestión de Redes de Datos</h5>
                    <span class="badge bg-warning text-dark fw-bold">Próxima a Cerrar</span>
                </div>
                <div class="card-body p-4">
                    <p class="text-muted small mb-3"><strong>Ficha / Código:</strong> 2891105 | <strong>Cupos disponibles:</strong> 25</p>

                    <!-- Estadísticas Rápidas -->
                    <div class="row text-center g-2 mb-3">
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-info">65</span>
                                <small class="text-muted fw-semibold">👀 Interesados</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-success">20</span>
                                <small class="text-muted fw-semibold">✍️ Inscritos</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-warning">5</span>
                                <small class="text-muted fw-semibold">⏳ Por Evaluar</small>
                            </div>
                        </div>
                    </div>



                    <!-- Barra de Progreso de Cupos -->
                    <div class="mb-3">
                        <div class="d-flex justify-content-between small text-muted mb-1">
                            <span>Ocupación de cupos</span>
                            <span class="fw-bold text-dark">80%</span>
                        </div>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="#" class="btn btn-outline-secondary btn-sm rounded-pill">Ver Métricas</a>
                        <a href="#" class="btn btn-warning btn-sm text-dark fw-bold rounded-pill">Evaluar Aspirantes (5)</a>
                    </div>

                </div>

            </div>
        </div>
        <!-- Oferta 2: Mantenimiento de Equipos de Cómputo -->
        <div class="col-12 col-lg-6">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header text-white py-3 d-flex justify-content-between align-items-center" style="background-color: #39A900;">
                    <h5 class="mb-0 fw-bold">Mantenimiento de Equipos de Cómputo</h5>
                    <span class="badge bg-light text-success fw-bold">Convocatoria Abierta</span>
                </div>
                <div class="card-body p-4">
                    <p class="text-muted small mb-3"><strong>Ficha / Código:</strong> 2718920 | <strong>Cupos disponibles:</strong> 35</p>

                    <!-- Estadísticas Rápidas -->
                    <div class="row text-center g-2 mb-3">
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-info">85</span>
                                <small class="text-muted fw-semibold">👀 Interesados</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-success">22</span>
                                <small class="text-muted fw-semibold">✍️ Inscritos</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-warning">8</span>
                                <small class="text-muted fw-semibold">⏳ Por Evaluar</small>
                            </div>
                        </div>
                    </div>

                    <!-- Barra de Progreso de Cupos -->
                    <div class="mb-3">
                        <div class="d-flex justify-content-between small text-muted mb-1">
                            <span>Ocupación de cupos</span>
                            <span class="fw-bold text-dark">62% (Cupos disponibles)</span>
                        </div>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 62%;" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="#" class="btn btn-outline-secondary btn-sm rounded-pill">Ver Métricas</a>
                        <a href="#" class="btn btn-warning btn-sm text-dark fw-bold rounded-pill">Evaluar Aspirantes (8)</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Oferta 3: Diseño e Integración de Multimedia -->
        <div class="col-12 col-lg-6">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header text-white py-3 d-flex justify-content-between align-items-center" style="background-color: #39A900;">
                    <h5 class="mb-0 fw-bold">Diseño e Integración de Multimedia</h5>
                    <span class="badge bg-warning text-dark fw-bold">Próxima a Cerrar</span>
                </div>
                <div class="card-body p-4">
                    <p class="text-muted small mb-3"><strong>Ficha / Código:</strong> 2834109 | <strong>Cupos disponibles:</strong> 25</p>

                    <!-- Estadísticas Rápidas -->
                    <div class="row text-center g-2 mb-3">
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-info">140</span>
                                <small class="text-muted fw-semibold">👀 Interesados</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-success">38</span>
                                <small class="text-muted fw-semibold">✍️ Inscritos</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-warning">15</span>
                                <small class="text-muted fw-semibold">⏳ Por Evaluar</small>
                            </div>
                        </div>
                    </div>

                    <!-- Barra de Progreso de Cupos -->
                    <div class="mb-3">
                        <div class="d-flex justify-content-between small text-muted mb-1">
                            <span>Ocupación de cupos</span>
                            <span class="fw-bold text-dark">152% (Sobredemandado)</span>
                        </div>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="#" class="btn btn-outline-secondary btn-sm rounded-pill">Ver Métricas</a>
                        <a href="#" class="btn btn-warning btn-sm text-dark fw-bold rounded-pill">Evaluar Aspirantes (15)</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Oferta 4: Gestión Administrativa -->
        <div class="col-12 col-lg-6">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header text-white py-3 d-flex justify-content-between align-items-center" style="background-color: #39A900;">
                    <h5 class="mb-0 fw-bold">Gestión Administrativa</h5>
                    <span class="badge bg-secondary text-white fw-bold">En Selección</span>
                </div>
                <div class="card-body p-4">
                    <p class="text-muted small mb-3"><strong>Ficha / Código:</strong> 2590112 | <strong>Cupos disponibles:</strong> 30</p>

                    <!-- Estadísticas Rápidas -->
                    <div class="row text-center g-2 mb-3">
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-info">95</span>
                                <small class="text-muted fw-semibold">👀 Interesados</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-success">30</span>
                                <small class="text-muted fw-semibold">✍️ Inscritos</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-muted">0</span>
                                <small class="text-muted fw-semibold">⏳ Por Evaluar</small>
                            </div>
                        </div>
                    </div>

                    <!-- Barra de Progreso de Cupos -->
                    <div class="mb-3">
                        <div class="d-flex justify-content-between small text-muted mb-1">
                            <span>Ocupación de cupos</span>
                            <span class="fw-bold text-dark">100% (Completo)</span>
                        </div>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="#" class="btn btn-outline-secondary btn-sm rounded-pill">Ver Métricas</a>
                        <button class="btn btn-secondary btn-sm rounded-pill" disabled>Evaluación Finalizada</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Oferta 5: Programación de Software -->
        <div class="col-12 col-lg-6">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header text-white py-3 d-flex justify-content-between align-items-center" style="background-color: #39A900;">
                    <h5 class="mb-0 fw-bold">Técnico en Programación de Software</h5>
                    <span class="badge bg-light text-success fw-bold">Convocatoria Abierta</span>
                </div>
                <div class="card-body p-4">
                    <p class="text-muted small mb-3"><strong>Ficha / Código:</strong> 2914480 | <strong>Cupos disponibles:</strong> 35</p>

                    <div class="row text-center g-2 mb-3">
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-info">110</span>
                                <small class="text-muted fw-semibold">👀 Interesados</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-success">32</span>
                                <small class="text-muted fw-semibold">✍️ Inscritos</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-warning">12</span>
                                <small class="text-muted fw-semibold">⏳ Por Evaluar</small>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="d-flex justify-content-between small text-muted mb-1">
                            <span>Ocupación de cupos</span>
                            <span class="fw-bold text-dark">91% (Cupos disponibles)</span>
                        </div>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 91%;" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="#" class="btn btn-outline-secondary btn-sm rounded-pill">Ver Métricas</a>
                        <a href="#" class="btn btn-warning btn-sm text-dark fw-bold rounded-pill">Evaluar Aspirantes (12)</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Oferta 6: Gestión Empresarial -->
        <div class="col-12 col-lg-6">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header text-white py-3 d-flex justify-content-between align-items-center" style="background-color: #39A900;">
                    <h5 class="mb-0 fw-bold">Tecnólogo en Gestión Empresarial</h5>
                    <span class="badge bg-warning text-dark fw-bold">Próxima a Cerrar</span>
                </div>
                <div class="card-body p-4">
                    <p class="text-muted small mb-3"><strong>Ficha / Código:</strong> 2855210 | <strong>Cupos disponibles:</strong> 30</p>

                    <div class="row text-center g-2 mb-3">
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-info">165</span>
                                <small class="text-muted fw-semibold">👀 Interesados</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-success">48</span>
                                <small class="text-muted fw-semibold">✍️ Inscritos</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-warning">21</span>
                                <small class="text-muted fw-semibold">⏳ Por Evaluar</small>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="d-flex justify-content-between small text-muted mb-1">
                            <span>Ocupación de cupos</span>
                            <span class="fw-bold text-dark">160% (Sobredemandado)</span>
                        </div>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="#" class="btn btn-outline-secondary btn-sm rounded-pill">Ver Métricas</a>
                        <a href="#" class="btn btn-warning btn-sm text-dark fw-bold rounded-pill">Evaluar Aspirantes (21)</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Oferta 7: Control de Calidad de Alimentos -->
        <div class="col-12 col-lg-6">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header text-white py-3 d-flex justify-content-between align-items-center" style="background-color: #39A900;">
                    <h5 class="mb-0 fw-bold">Control de Calidad en la Industria Alimentaria</h5>
                    <span class="badge bg-light text-success fw-bold">Convocatoria Abierta</span>
                </div>
                <div class="card-body p-4">
                    <p class="text-muted small mb-3"><strong>Ficha / Código:</strong> 2798011 | <strong>Cupos disponibles:</strong> 25</p>

                    <div class="row text-center g-2 mb-3">
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-info">50</span>
                                <small class="text-muted fw-semibold">👀 Interesados</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-success">14</span>
                                <small class="text-muted fw-semibold">✍️ Inscritos</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-warning">3</span>
                                <small class="text-muted fw-semibold">⏳ Por Evaluar</small>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="d-flex justify-content-between small text-muted mb-1">
                            <span>Ocupación de cupos</span>
                            <span class="fw-bold text-dark">56% (Baja demanda)</span>
                        </div>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 56%;" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="#" class="btn btn-outline-secondary btn-sm rounded-pill">Ver Métricas</a>
                        <a href="#" class="btn btn-warning btn-sm text-dark fw-bold rounded-pill">Evaluar Aspirantes (3)</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Oferta 8: Seguridad y Salud en el Trabajo -->
        <div class="col-12 col-lg-6">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header text-white py-3 d-flex justify-content-between align-items-center" style="background-color: #39A900;">
                    <h5 class="mb-0 fw-bold">Gestión de la Seguridad y Salud en el Trabajo</h5>
                    <span class="badge bg-warning text-dark fw-bold">Próxima a Cerrar</span>
                </div>
                <div class="card-body p-4">
                    <p class="text-muted small mb-3"><strong>Ficha / Código:</strong> 2843910 | <strong>Cupos disponibles:</strong> 30</p>

                    <div class="row text-center g-2 mb-3">
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-info">190</span>
                                <small class="text-muted fw-semibold">👀 Interesados</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-success">55</span>
                                <small class="text-muted fw-semibold">✍️ Inscritos</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-warning">28</span>
                                <small class="text-muted fw-semibold">⏳ Por Evaluar</small>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="d-flex justify-content-between small text-muted mb-1">
                            <span>Ocupación de cupos</span>
                            <span class="fw-bold text-dark">183% (Alta demanda)</span>
                        </div>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="#" class="btn btn-outline-secondary btn-sm rounded-pill">Ver Métricas</a>
                        <a href="#" class="btn btn-warning btn-sm text-dark fw-bold rounded-pill">Evaluar Aspirantes (28)</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Oferta 9: Animación 3D -->
        <div class="col-12 col-lg-6">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header text-white py-3 d-flex justify-content-between align-items-center" style="background-color: #39A900;">
                    <h5 class="mb-0 fw-bold">Técnico en Animación 3D</h5>
                    <span class="badge bg-light text-success fw-bold">Convocatoria Abierta</span>
                </div>
                <div class="card-body p-4">
                    <p class="text-muted small mb-3"><strong>Ficha / Código:</strong> 2980114 | <strong>Cupos disponibles:</strong> 20</p>

                    <div class="row text-center g-2 mb-3">
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-info">98</span>
                                <small class="text-muted fw-semibold">👀 Interesados</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-success">19</span>
                                <small class="text-muted fw-semibold">✍️ Inscritos</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-warning">6</span>
                                <small class="text-muted fw-semibold">⏳ Por Evaluar</small>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="d-flex justify-content-between small text-muted mb-1">
                            <span>Ocupación de cupos</span>
                            <span class="fw-bold text-dark">95% (Casi Lleno)</span>
                        </div>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="#" class="btn btn-outline-secondary btn-sm rounded-pill">Ver Métricas</a>
                        <a href="#" class="btn btn-warning btn-sm text-dark fw-bold rounded-pill">Evaluar Aspirantes (6)</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Oferta 10: Instalación de Redes Eléctricas -->
        <div class="col-12 col-lg-6">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header text-white py-3 d-flex justify-content-between align-items-center" style="background-color: #39A900;">
                    <h5 class="mb-0 fw-bold">Instalación de Redes Eléctricas Residenciales</h5>
                    <span class="badge bg-secondary text-white fw-bold">En Selección</span>
                </div>
                <div class="card-body p-4">
                    <p class="text-muted small mb-3"><strong>Ficha / Código:</strong> 2812390 | <strong>Cupos disponibles:</strong> 30</p>

                    <div class="row text-center g-2 mb-3">
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-info">72</span>
                                <small class="text-muted fw-semibold">👀 Interesados</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-success">30</span>
                                <small class="text-muted fw-semibold">✍️ Inscritos</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-muted">0</span>
                                <small class="text-muted fw-semibold">⏳ Por Evaluar</small>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="d-flex justify-content-between small text-muted mb-1">
                            <span>Ocupación de cupos</span>
                            <span class="fw-bold text-dark">100% (Completo)</span>
                        </div>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="#" class="btn btn-outline-secondary btn-sm rounded-pill">Ver Métricas</a>
                        <button class="btn btn-secondary btn-sm rounded-pill" disabled>Evaluación Finalizada</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Oferta 11: Contabilización de Operaciones Comerciales -->
        <div class="col-12 col-lg-6">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header text-white py-3 d-flex justify-content-between align-items-center" style="background-color: #39A900;">
                    <h5 class="mb-0 fw-bold">Contabilización de Operaciones Comerciales</h5>
                    <span class="badge bg-light text-success fw-bold">Convocatoria Abierta</span>
                </div>
                <div class="card-body p-4">
                    <p class="text-muted small mb-3"><strong>Ficha / Código:</strong> 2950188 | <strong>Cupos disponibles:</strong> 35</p>

                    <div class="row text-center g-2 mb-3">
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-info">130</span>
                                <small class="text-muted fw-semibold">👀 Interesados</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-success">29</span>
                                <small class="text-muted fw-semibold">✍️ Inscritos</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-2 bg-light rounded-3 border">
                                <span class="d-block fs-4 fw-bold text-warning">9</span>
                                <small class="text-muted fw-semibold">⏳ Por Evaluar</small>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="d-flex justify-content-between small text-muted mb-1">
                            <span>Ocupación de cupos</span>
                            <span class="fw-bold text-dark">82% (Cupos disponibles)</span>
                        </div>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 82%;" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="#" class="btn btn-outline-secondary btn-sm rounded-pill">Ver Métricas</a>
                        <a href="#" class="btn btn-warning btn-sm text-dark fw-bold rounded-pill">Evaluar Aspirantes (9)</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection