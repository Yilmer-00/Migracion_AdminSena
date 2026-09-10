@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-success">📋 Supervisión de Notificaciones</h2>
        <a href="{{ route('admin.notifications.create') }}" class="btn btn-success rounded-pill px-4" style="background-color: #39A900; border:none;">
            + Publicar Nueva Notificación
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success rounded-3">{{ session('success') }}</div>
    @endif

    <div class="card border-0 shadow-sm rounded-3">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Ícono</th>
                            <th>Título</th>
                            <th>Etiqueta</th>
                            <th>Destinatario</th>
                            <th>Fecha</th>
                            <th class="text-end">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($notifications as $item)
                            <tr>
                                <td class="fs-4">{{ $item->data['icon'] ?? '🔔' }}</td>
                                <td>
                                    <strong>{{ $item->data['title'] ?? 'Sin título' }}</strong>
                                    <br><small class="text-muted">{!! Str::limit($item->data['message'] ?? '', 50) !!}</small>
                                </td>
                                <td>
                                    <span class="badge {{ $item->data['badge_class'] ?? 'bg-secondary' }}">
                                        {{ $item->data['badge_text'] ?? 'Aviso' }}
                                    </span>
                                </td>
                                <td>{{ $item->notifiable->name ?? 'Usuario ID: '.$item->notifiable_id }}</td>
                                <td><small class="text-muted">{{ $item->created_at->format('d/m/Y h:i A') }}</small></td>
                                <td class="text-end">
                                    <a href="{{ route('admin.notifications.edit', $item->id) }}" class="btn btn-sm btn-outline-primary rounded-pill me-1">
                                        Editar
                                    </a>
                                    <form action="{{ route('admin.notifications.destroy', $item->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger rounded-pill" onclick="return confirm('¿Deseas eliminar esta notificación?')">
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-4 text-muted">No se han emitido notificaciones aún.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="mt-3">
        {{ $notifications->links() }}
    </div>
</div>
@endsection