@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 750px; margin-top: 30px;">
    <div class="mb-3">
        <a href="{{ url('/computer/list') }}" class="btn btn-secondary btn-sm">← Volver</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-header text-white" style="background-color: #39A900;">
            <h4 class="mb-0">Especificaciones del Computador</h4>
        </div>
        <div class="card-body">
            <h5 class="text-success mb-3">Datos del Equipo</h5>
            <div class="row mb-2">
                <div class="col-sm-4 fw-bold text-muted">Marca / Fabricante:</div>
                <div class="col-sm-8"><strong>{{ $computer->brand }}</strong></div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-4 fw-bold text-muted">Número de Inventario:</div>
                <div class="col-sm-8"><span class="badge bg-dark">N° {{ $computer->number }}</span></div>
            </div>
        </div>
        <div class="card-footer bg-light text-end">
            <small class="text-muted float-start mt-1">ID Equipo: {{ $computer->id }}</small>
        </div>
    </div>
</div>
@endsection