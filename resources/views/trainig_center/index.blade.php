@extends('layouts.app')

@section('content')

<h1>LISTAR CENTROS DE FORMACIÓN</h1>

<div class="container">
    
    <div class="mb-3 text-end">
        <a href="{{ route('trainig-center.create') }}" class="btn btn-primary">Nuevo Centro de Formación</a>
    </div>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre del Centro</th>
                <th>Ubicación</th>
            </tr>
        </thead>

        <tbody>
            @foreach($trainingCenters as $center)
            <tr>
                <td>{{ $center->id }}</td>
                <td>{{ $center->name }}</td>
                <td>{{ $center->location }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection