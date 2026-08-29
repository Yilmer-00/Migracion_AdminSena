@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center my-4" style="min-height: 80vh;">
    <div class="card border-0 shadow-lg p-4" style="width: 100%; max-width: 440px; border-radius: 16px;">

        <!-- Encabezado con Icono y Título -->
        <div class="text-center mb-4">
            <div class="d-inline-flex align-items-center justify-content-center rounded-circle mb-3 shadow-sm"
                style="width: 70px; height: 70px; background-color: #00324d; color: #ffffff; font-size: 2rem;">
                👤
            </div>
            <h3 class="fw-bold text-dark mb-1">Crear Cuenta</h3>
            <p class="text-muted small">Ingresa tus datos para registrarte en AdminSena</p>
        </div>

        <!-- Formulario de Registro -->
        <form method="POST" action="{{ url('/register') }}">
            @csrf

            <!-- Campo: Nombre Completo -->
            <div class="mb-3">
                <label for="name" class="form-label fw-semibold text-secondary small">Nombre Completo</label>
                <input id="name"
                    type="text"
                    class="form-control form-control-lg @error('name') is-invalid @enderror"
                    name="name"
                    value="{{ old('name') }}"
                    required
                    autocomplete="name"
                    autofocus
                    placeholder="Ej. Carlos Pérez"
                    style="border-radius: 10px; font-size: 0.95rem;">

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

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
                    autocomplete="new-password"
                    placeholder="••••••••"
                    style="border-radius: 10px; font-size: 0.95rem;">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <!-- Campo: Confirmar Contraseña -->
            <div class="mb-4">
                <label for="password-confirm" class="form-label fw-semibold text-secondary small">Confirmar Contraseña</label>
                <input id="password-confirm"
                    type="password"
                    class="form-control form-control-lg"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                    placeholder="••••••••"
                    style="border-radius: 10px; font-size: 0.95rem;">
            </div>

            <!-- Botones de Acción -->
            <div class="d-grid gap-2">
                <!-- Botón Principal: REGISTRARSE -->
                <button type="submit"
                    class="btn text-white fw-bold py-2 shadow-sm"
                    style="background-color: #39A900; border: none; border-radius: 10px; font-size: 1rem;">
                    Registrarse
                </button>

                <!-- Botón Secundario: YA TENGO CUENTA -->
                <a href="{{ url('/login')}}"
                    class="btn fw-semibold py-2 shadow-sm"
                    style="border-radius: 10px; font-size: 0.95rem; border: 1px solid #00324d; color: #00324d; background-color: transparent;">
                    Ya tengo una cuenta
                </a>
            </div>
        </form>

        <!-- Pie de tarjeta: Enlace a Login -->
        <div class="text-center mt-4 pt-3 border-top">
            <p class="text-muted small mb-0">
                ¿Ya estás registrado?
                <a href="{{url('/login') }}" class="fw-bold text-decoration-none" style="color: #39A900;">
                    Inicia sesión aquí
                </a>
            </p>
        </div>

    </div>
</div>
@endsection
