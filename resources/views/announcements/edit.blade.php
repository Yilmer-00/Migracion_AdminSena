@extends('layouts.app')

@section('content')
<div class="container py-4" style="max-width: 700px;">
    <h2 class="mb-4">Editar Anuncio</h2>

    <form action="{{ route('announcements.update', $announcement) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Título</label>
            <input type="text" name="title" class="form-control" value="{{ $announcement->title }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Descripción</label>
            <textarea name="description" class="form-control" rows="3" required>{{ $announcement->description }}</textarea>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Texto de Insignia</label>
                <input type="text" name="badge_text" class="form-control" value="{{ $announcement->badge_text }}" required>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Estilo de Insignia</label>
                <select name="badge_class" class="form-select">
                    <option value="bg-success" {{ $announcement->badge_class == 'bg-success' ? 'selected' : '' }}>Verde (bg-success)</option>
                    <option value="bg-warning text-dark" {{ $announcement->badge_class == 'bg-warning text-dark' ? 'selected' : '' }}>Amarillo (bg-warning)</option>
                    <option value="bg-info text-dark" {{ $announcement->badge_class == 'bg-info text-dark' ? 'selected' : '' }}>Azul Claro (bg-info)</option>
                    <option value="bg-danger" {{ $announcement->badge_class == 'bg-danger' ? 'selected' : '' }}>Rojo (bg-danger)</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Texto del Botón</label>
                <input type="text" name="button_text" class="form-control" value="{{ $announcement->button_text }}">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">URL del Botón</label>
                <input type="text" name="button_url" class="form-control" value="{{ $announcement->button_url }}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Orden</label>
                <input type="number" name="order" class="form-control" value="{{ $announcement->order }}">
            </div>
            <div class="col-md-6 d-flex align-items-end">
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" name="is_active" id="is_active" {{ $announcement->is_active ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_active">Anuncio Activo</label>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-success">Actualizar Anuncio</button>
        <a href="{{ route('announcements.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection