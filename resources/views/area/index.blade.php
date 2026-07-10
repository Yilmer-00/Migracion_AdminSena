@extends('layouts.app')

@section('content')

<h1>LISTAR ÁREAS</h1>

<div class="container">
    <!-- Un botón opcional por si quieres redirigir al formulario de creación que me mostraste -->
    <div class="mb-3 text-end">
        <a href="{{ route('area.create') }}" class="btn btn-primary">Crear Nueva Área</a>
    </div>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre del Área</th>
                <!-- Puedes agregar una columna de acciones más adelante (Editar/Eliminar) -->
            </tr>
        </thead>

        <tbody>
            @foreach($areas as $area)
            <tr>
                <td>{{ $area->id }}</td>
                <td>{{ $area->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection