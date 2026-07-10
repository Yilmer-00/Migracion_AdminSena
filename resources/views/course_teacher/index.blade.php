@extends('layouts.app')

@section('content')

<h1>LISTAR ASIGNACIONES DE INSTRUCTORES</h1>

<div class="container">
    {{-- Mensaje de éxito al asignar --}}
    @if(session('success'))
        <div style="color: green; background-color: #d4edda; padding: 10px; margin-bottom: 15px; border-radius: 5px;">
            {{ session('success') }}
        </div>
    @endif

    <!-- Botón para ir al formulario de asignación -->
    <div class="mb-3 text-end">
        <a href="{{ route('course_teacher.registro') }}" class="btn btn-primary">Asignar Nuevo Instructor</a>
    </div>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Número de Curso (Ficha)</th>
                <th>Jornada</th>
                <th>Instructor Asignado</th>
                <th>Email Instructor</th>
            </tr>
        </thead>

        <tbody>
            @foreach($courseTeachers as $assignment)
            <tr>
                <td>{{ $assignment->id }}</td>
                {{-- Traemos los datos del curso --}}
                <td>{{ $assignment->course->course_number ?? $assignment->curse->course_number ?? 'N/A' }}</td>
                <td>{{ $assignment->course->day ?? $assignment->curse->day ?? 'N/A' }}</td>
                {{-- Traemos los datos del instructor --}}
                <td>{{ $assignment->teacher->name ?? 'Sin Instructor' }}</td>
                <td>{{ $assignment->teacher->email ?? 'N/A' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection