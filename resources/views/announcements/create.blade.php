@extends('layouts.app')

@section('content')
<div class="container py-4" style="max-width: 700px;">
    <h2 class="mb-4">Crear Nuevo Anuncio</h2>

    <form action="{{ route('announcements.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Título</label>
            <input type="text" name="title" class="form-control" required placeholder="Ej: ¡Nuevo Módulo Disponible!">
        </div>

        <div class="mb-3">
            <label class="form-label">Descripción</label>
            <textarea name="description" class="form-control" rows="3" required placeholder="Detalle del anuncio..."></textarea>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Texto de la Insignia (Badge)</label>
                <input type="text" name="badge_text" class="form-control" required placeholder="Ej: 📢 NOVEDAD">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Estilo de Insignia (Clase CSS)</label>
                <select name="badge_class" class="form-select">
                    <option value="bg-success">Verde (bg-success)</option>
                    <option value="bg-warning text-dark">Amarillo (bg-warning)</option>
                    <option value="bg-info text-dark">Azul Claro (bg-info)</option>
                    <option value="bg-danger">Rojo (bg-danger)</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Texto del Botón (Opcional)</label>
                <input type="text" name="button_text" class="form-control" placeholder="Ej: Ver Módulo">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">URL del Botón (Opcional)</label>
                <input type="text" name="button_url" class="form-control" placeholder="Ej: /computer">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Orden de aparición</label>
                <input type="number" name="order" class="form-control" value="0">
            </div>
            <div class="col-md-6 d-flex align-items-end">
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" name="is_active" id="is_active" checked>
                    <label class="form-check-label" for="is_active">Anuncio Activo</label>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Anuncio</button>
        <a href="{{ route('announcements.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection