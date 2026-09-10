@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm rounded-3">
                <div class="card-header bg-success text-white py-3 fw-bold" style="background-color: #39A900 !important;">
                    📢 Publicar Nueva Notificación
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('admin.notifications.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label fw-bold">Título</label>
                            <input type="text" name="title" class="form-control" required placeholder="Ej: Mantenimiento Programado">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Mensaje / Descripción</label>
                            <textarea name="message" class="form-control" rows="3" required placeholder="Escribe el detalle de la alerta..."></textarea>
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-md-4">
                                <label class="form-label fw-bold">Texto de Etiqueta</label>
                                <input type="text" name="badge_text" class="form-control" required placeholder="Ej: URGENTE">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fw-bold">Color (Bootstrap)</label>
                                <select name="badge_class" class="form-select" required>
                                    <option value="bg-danger">Rojo (Danger)</option>
                                    <option value="bg-warning text-dark">Amarillo (Warning)</option>
                                    <option value="bg-info text-dark">Azul Claro (Info)</option>
                                    <option value="bg-success">Verde (Success)</option>
                                    <option value="bg-dark">Oscuro (Dark)</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fw-bold">Ícono (Emoji)</label>
                                <input type="text" name="icon" class="form-control" required value="🔔">
                            </div>
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Categoría / Tipo</label>
                                <select name="type" class="form-select" required>
                                    <option value="maintenance">Mantenimiento</option>
                                    <option value="computer">Equipos / Devoluciones</option>
                                    <option value="server">Servidores</option>
                                    <option value="audit">Auditoría</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold">URL de Redirección (Opcional)</label>
                                <input type="text" name="url" class="form-control" placeholder="/computers">
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.notifications.index') }}" class="btn btn-outline-secondary rounded-pill">Cancelar</a>
                            <button type="submit" class="btn btn-success rounded-pill px-4" style="background-color: #39A900; border:none;">Enviar a Todos</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection