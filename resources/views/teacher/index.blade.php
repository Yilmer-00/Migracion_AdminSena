@extends('layouts.app')

@section('content')

<h1>LISTAR PROFESORES</h1>

<div class="container">
    {{-- Mensaje de éxito al guardar --}}
    @if(session('success'))
    <div style="color: green; background-color: #d4edda; padding: 10px; margin-bottom: 15px; border-radius: 5px;">
        {{ session('success') }}
    </div>
    @endif

    <!-- Botón para ir al formulario de registro -->
    <div class="mb-3 text-end">
        <a href="{{ route('teacher.create') }}" class="btn btn-primary">Nuevo Profesor</a>
    </div>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Área</th>
                <th>Centro de Formación</th>
            </tr>
        </thead>

        <tbody>
            @foreach($teachers as $teacher)
            <tr>
                <td>{{ $teacher->id }}</td>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->email }}</td>
                {{-- Accedemos al nombre del área y centro a través de sus relaciones --}}
                <td>{{ $teacher->area->name ?? 'Sin Área' }}</td>
                <td>{{ $teacher->training_center->name ?? 'Sin Centro' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection