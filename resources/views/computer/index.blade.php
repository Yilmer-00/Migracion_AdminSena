@extends('layouts.app')

@section('content')

<h1>LISTAR COMPUTADORES</h1>

<div class="container">
    {{-- Mensaje de éxito al guardar --}}
    @if(session('success'))
        <div style="color: green; background-color: #d4edda; padding: 10px; margin-bottom: 15px; border-radius: 5px;">
            {{ session('success') }}
        </div>
    @endif

    <!-- Botón para ir al formulario de registro -->
    <div class="mb-3 text-end">
        <a href="{{ route('computer.create') }}" class="btn btn-primary">Registrar Computador</a>
    </div>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Número de Computador</th>
                <th>Marca (Brand)</th>
            </tr>
        </thead>

        <tbody>
            @foreach($computers as $computer)
            <tr>
                <td>{{ $computer->id }}</td>
                <td>{{ $computer->number }}</td>
                <td>{{ $computer->brand }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection