@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card border-0 shadow-lg p-4" style="width: 100%; max-width: 420px; border-radius: 16px;">

        <!-- Encabezado con Icono y Título -->
        <div class="text-center mb-4">
            <div class="d-inline-flex align-items-center justify-content-center rounded-circle mb-3 shadow-sm"
                style="width: 70px; height: 70px; background-color: #00324d; color: #ffffff; font-size: 2rem;">
                🔑
            </div>
            <h3 class="fw-bold text-dark mb-1">Iniciar Sesión</h3>
            <p class="text-muted small">Ingresa tus credenciales para acceder a AdminSena</p>
        </div>

        <!-- Formulario de Login -->
        <form action="{{ route('login.post') }}" method="POST">
            @csrf

            <!-- Campo: Correo Electrónico -->
            <div class="mb-3">
                <label for="email" class="form-label fw-semibold text-secondary small">Correo Electrónico</label>
                <input id="email"
                    type="email"
                    class="form-control form-control-lg @error('email') is-invalid @enderror"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autocomplete="email"
                    autofocus
                    placeholder="ejemplo@sena.edu.co"
                    style="border-radius: 10px; font-size: 0.95rem;">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <!-- Campo: Contraseña -->
            <div class="mb-3">
                <label for="password" class="form-label fw-semibold text-secondary small">Contraseña</label>
                <input id="password"
                    type="password"
                    class="form-control form-control-lg @error('password') is-invalid @enderror"
                    name="password"
                    required
                    autocomplete="current-password"
                    placeholder="••••••••"
                    style="border-radius: 10px; font-size: 0.95rem;">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <!-- Opciones: Recordar sesión y Olvidé contraseña -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label text-muted small" for="remember">
                        Recordarme
                    </label>
                </div>
                @if (Route::has('password.request'))
                <a class="text-decoration-none small fw-semibold" href="{{ route('password.request') }}" style="color: #00324d;">
                    ¿Olvidaste tu contraseña?
                </a>
                @endif
            </div>

            <!-- Botones de Acción -->
            <div class="d-grid gap-2">
                <!-- Botón Principal: CONTINUAR -->
                <button type="submit"
                    class="btn text-white fw-bold py-2 shadow-sm"
                    style="background-color: #39A900; border: none; border-radius: 10px; font-size: 1rem;">
                    Continuar
                </button>

                <!-- Botón Secundario: YA TENGO CUENTA -->
                <a href="{{ url('/register') }}"
                    class="btn fw-semibold py-2 shadow-sm"
                    style="border-radius: 10px; font-size: 0.95rem; border: 1px solid #00324d; color: #00324d; background-color: transparent;">
                    Crear cuenta
                </a>
            </div>
        </form>

        <!-- Pie de tarjeta: Enlace a Registro -->
        @if (Route::has('register'))
        <div class="text-center mt-4 pt-3 border-top">
            <p class="text-muted small mb-0">
                ¿No tienes una cuenta?
                <a href="{{ url('/register') }}" class="fw-bold text-decoration-none" style="color: #39A900;">
                    Regístrate aquí
                </a>
            </p>
        </div>
        @endif

    </div>
</div>
@endsection
