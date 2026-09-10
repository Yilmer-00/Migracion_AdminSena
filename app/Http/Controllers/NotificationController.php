<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = auth()->user();
        $query = $user->notifications();

        // Filtro opcional por categoría (según el payload JSON)
        if ($request->filled('type')) {
            $query->where('data->type', $request->type);
        }

        $notifications = $query->paginate(10);

        return view('notification.index', compact('notifications'));
    }
    
    public function markAllAsRead()
    {
        /** @var \App\Models\User $user */
        $user = auth()->user();
        $user->unreadNotifications->markAsRead();

        return back()->with('success', 'Todas las notificaciones se marcaron como leídas.');
    }

    public function destroy(string $id)
    {
        /** @var \App\Models\User $user */
        $user = auth()->user();
        $user->notifications()->where('id', $id)->firstOrFail()->delete();

        return back()->with('success', 'Notificación archivada correctamente.');
    }
}
