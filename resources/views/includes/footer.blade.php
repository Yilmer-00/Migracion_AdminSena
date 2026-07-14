<!-- Footer -->
<footer class="bg-dark text-light py-5 mt-5 border-top border-secondary" style="font-family: 'Segoe UI', Roboto, sans-serif;">
    <div class="container">
        <div class="row g-4">
            
            <!-- Columna 1: Branding y Propósito -->
            <div class="col-lg-4 col-md-6">
                <div class="d-flex align-items-center mb-3">
                    <!-- Decoración verde SENA al lado del título -->
                    <div style="width: 5px; height: 32px; background-color: #39A900; border-radius: 2px;" class="me-2"></div>
                    <h4 class="text-white fw-bolder mb-0 tracking-wide">AdminSENA</h4>
                </div>
                <!-- Cambiado text-muted por text-white-50 para máxima legibilidad -->
                <p class="text-white-50 small pe-lg-4">
                    Plataforma integral para la gestión, control e inventario de ambientes de formación, instructores y recursos tecnológicos de la institución.
                </p>
                <!-- Indicador de Estado del Sistema -->
                <div class="d-inline-flex align-items-center bg-secondary bg-opacity-25 px-3 py-1 rounded-pill mt-2">
                    <span class="spinner-grow spinner-grow-sm text-success me-2" role="status" style="width: 10px; height: 10px;"></span>
                    <span class="text-white small fw-semibold" style="font-size: 0.75rem;">Todos los sistemas operativos</span>
                </div>
            </div>

            <!-- Columna 2: Enlaces Rápidos de Navegación -->
            <div class="col-lg-4 col-md-6">
                <h5 class="text-white fw-bold mb-3">Accesos Rápidos</h5>
                <div class="row">
                    <div class="col-6">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                                <a href="{{ route('teacher.create') }}" class="text-white-50 text-decoration-none hover-green small">
                                    <i class="fas fa-chevron-right me-1 small"></i> Instructores
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="{{ route('area.create') }}" class="text-white-50 text-decoration-none hover-green small">
                                    <i class="fas fa-chevron-right me-1 small"></i> Áreas
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="{{ route('computer.create') }}" class="text-white-50 text-decoration-none hover-green small">
                                    <i class="fas fa-chevron-right me-1 small"></i> Inventario PC
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                                <a href="{{ route('course.index') }}" class="text-white-50 text-decoration-none hover-green small">
                                    <i class="fas fa-chevron-right me-1 small"></i> Fichas/Cursos
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="{{ route('course_teacher.index') }}" class="text-white-50 text-decoration-none hover-green small">
                                    <i class="fas fa-chevron-right me-1 small"></i> Asignaciones
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-white-50 text-decoration-none hover-green small">
                                    <i class="fas fa-chevron-right me-1 small"></i> Soporte TIC
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Columna 3: Información del Centro de Formación -->
            <div class="col-lg-4 col-md-12">
                <h5 class="text-white fw-bold mb-3">Centro de Operación</h5>
                <p class="text-white-50 small mb-2">
                    <i class="fas fa-map-marked-alt text-success me-2 fs-5"></i> Centro de Comercio y Servicios — Regional Cauca
                </p>
                <p class="text-white-50 small mb-2">
                    <i class="fas fa-headset text-success me-2 fs-5"></i> Mesa de ayuda: +57 (602) 8224000
                </p>
                
                <!-- Iconos de Redes Integrados Estilo Badge -->
                <div class="mt-3">
                    <a href="https://facebook.com" class="btn btn-outline-secondary btn-sm rounded-circle me-2 social-btn" target="_blank">
                        <i class="fab fa-facebook-f text-white"></i>
                    </a>
                    <a href="https://twitter.com" class="btn btn-outline-secondary btn-sm rounded-circle me-2 social-btn" target="_blank">
                        <i class="fab fa-twitter text-white"></i>
                    </a>
                    <a href="https://instagram.com" class="btn btn-outline-secondary btn-sm rounded-circle social-btn" target="_blank">
                        <i class="fab fa-instagram text-white"></i>
                    </a>
                </div>
            </div>

        </div>

        <hr class="my-4 border-secondary opacity-50">

        <!-- Fila de Copyright, Versión del Sistema y el Saludo Divertido -->
        <div class="row align-items-center small" style="color: #b0b3b8;">
            <div class="col-md-4 text-center text-md-start">
                <p class="mb-0">&copy; {{ date('Y') }} <strong class="text-white">AdminSENA</strong>. Hecho para el ambiente de formación.</p>
            </div>
            <div class="col-md-4 text-center my-2 my-md-0">
                <!-- Se corrigió el color del texto de la versión a blanco para que sea legible -->
                <span class="badge bg-dark border border-secondary text-white px-3 py-2">Versión de Producción 2.1.0</span>
            </div>
            <div class="col-md-4 text-center text-md-end">
                <span class="text-success fw-bold fs-6">Yilmer Alexander Melenge Cordoba 👋</span>
            </div>
        </div>
    </div>
</footer>

<!-- Estilos Customizados Avanzados -->
<style>
    /* Efecto hover elegante para los enlaces de navegación */
    .hover-green {
        transition: all 0.25s ease-in-out;
    }
    .hover-green:hover {
        color: #39A900 !important;
        padding-left: 5px; /* Sutil empujón hacia la derecha al posarse */
    }

    /* Estilos interactivos para los botones de las redes sociales */
    .social-btn {
        width: 36px;
        height: 36px;
        padding: 0;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-color: rgba(255, 255, 255, 0.15) !important;
        transition: all 0.3s ease;
    }
    .social-btn:hover {
        background-color: #39A900 !important;
        border-color: #39A900 !important;
        transform: translateY(-3px); /* Pequeño salto hacia arriba */
        box-shadow: 0 4px 10px rgba(57, 169, 0, 0.3);
    }
</style>