@extends('layouts.app')

@section('content')
<div class="container py-4">
    <!-- Encabezado -->
    <div class="p-4 mb-4 rounded-3 text-white shadow-sm d-flex align-items-center justify-content-between" style="background-color: #39A900;">
        <div>
            <h2 class="fw-bold m-0">🔔 Centro de Alertas y Notificaciones</h2>
            <p class="m-0 text-white-50">Gestiona los avisos del sistema, mantenimientos y préstamos pendientes.</p>
        </div>
        @if(auth()->user()->unreadNotifications->count() > 0)
            <form action="{{ route('notifications.markAsRead') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-light text-success fw-bold rounded-pill shadow-sm">
                    ✓ Marcar todas como leídas
                </button>
            </form>
        @endif
    </div>

    <!-- Filtros Rápidos -->
    <div class="d-flex gap-2 mb-4">
        <a href="{{ route('notifications.index') }}" class="btn btn-outline-success rounded-pill px-3 {{ !request('type') ? 'active text-white' : '' }}">Todas</a>
        <a href="{{ route('notifications.index', ['type' => 'maintenance']) }}" class="btn btn-outline-secondary rounded-pill px-3 {{ request('type') == 'maintenance' ? 'active text-white' : '' }}">Mantenimiento</a>
        <a href="{{ route('notifications.index', ['type' => 'computer']) }}" class="btn btn-outline-secondary rounded-pill px-3 {{ request('type') == 'computer' ? 'active text-white' : '' }}">Equipos / Devoluciones</a>
        <a href="{{ route('notifications.index', ['type' => 'server']) }}" class="btn btn-outline-secondary rounded-pill px-3 {{ request('type') == 'server' ? 'active text-white' : '' }}">Servidores</a>
    </div>

    <!-- Lista de Notificaciones -->
    <div class="row g-3">
        @forelse($notifications as $notification)
            <div class="col-12">
                <div class="card border-0 shadow-sm border-start border-4 border-{{ str_replace('bg-', '', $notification->data['badge_class'] ?? 'primary') }} rounded-3 {{ $notification->read_at ? 'opacity-75' : '' }}">
                    <div class="card-body p-3 d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-3">
                            <div class="{{ $notification->data['badge_class'] ?? 'bg-primary' }} text-white p-3 rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                                {{ $notification->data['icon'] ?? '🔔' }}
                            </div>
                            <div>
                                <span class="badge {{ $notification->data['badge_class'] ?? 'bg-primary' }} mb-1">
                                    {{ $notification->data['badge_text'] ?? 'Aviso' }}
                                </span>
                                <h6 class="fw-bold text-dark m-0">{{ $notification->data['title'] }}</h6>
                                <small class="text-muted">{!! $notification->data['message'] !!}</small>
                            </div>
                        </div>

                        <div class="text-end">
                            <span class="text-muted d-block small mb-2">{{ $notification->created_at->diffForHumans() }}</span>
                            <div class="d-flex gap-2 justify-content-end">
                                @if(!empty($notification->data['url']))
                                    <a href="{{ $notification->data['url'] }}" class="btn btn-sm btn-outline-primary rounded-pill">Ver Detalle</a>
                                @endif
                                
                                <form action="{{ route('notifications.destroy', $notification->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-secondary rounded-pill">Archivar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center py-5">
                <p class="text-muted">No tienes notificaciones registradas en este momento.</p>
            </div>
        @endforelse

        <div class="mt-3">
            {{ $notifications->links() }}
        </div>

        <div class="mt-2">
            <a href="{{ url('/home') }}" class="btn btn-success px-4 py-2" style="background-color: #39A900; border: none; border-radius: 8px;">
                Ir al home
            </a>
        </div>
    </div>
</div>
@endsection