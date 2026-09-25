@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 600px; margin-top: 30px;">
    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-header text-white py-3" style="background-color: #39A900;">
            <h4 class="mb-0 fw-bold">🎓 Postulación a Programa de Formación</h4>
        </div>
        <div class="card-body p-4">

            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('postulacion.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nombre" class="form-label fw-bold">Nombre Completo</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej: María Gómez" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label fw-bold">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="correo@ejemplo.com" required>
                </div>
                

                <div class="mb-3">
                    <label for="course_id" class="form-label fw-bold">Selecciona la Ficha / Programa</label>
                    <select class="form-select" id="course_id" name="course_id" required>
                        <option value="">Seleccione una opción...</option>
                        @foreach($courses as $course)
                        <option value="{{ $course->id }}">
                            {{ optional($course->formacion)->nombre ?? 'Sin programa asignado' }} - Ficha: {{ $course->course_number }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn text-white fw-bold py-2" style="background-color: #39A900;">Enviar Postulación</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection