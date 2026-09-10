@extends('layouts.app') {{-- Reemplaza por tu layout principal --}}

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Gestión de Anuncios del Carrusel</h2>
        <a href="{{ route('announcements.create') }}" class="btn btn-primary rounded-pill">
            + Nuevo Anuncio
        </a>
    </div>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>Orden</th>
                        <th>Insignia</th>
                        <th>Título</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($announcements as $announcement)
                    <tr>
                        <td>{{ $announcement->order }}</td>
                        <td>
                            <span class="badge {{ $announcement->badge_class }}">
                                {{ $announcement->badge_text }}
                            </span>
                        </td>
                        <td class="fw-bold">{{ $announcement->title }}</td>
                        <td>
                            @if($announcement->is_active)
                            <span class="badge bg-success">Activo</span>
                            @else
                            <span class="badge bg-secondary">Inactivo</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('announcements.edit', $announcement) }}" class="btn btn-sm btn-outline-warning me-1">Editar</a>
                            <form action="{{ route('announcements.destroy', $announcement) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Seguro que deseas eliminar este anuncio?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-4">No hay anuncios creados.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection