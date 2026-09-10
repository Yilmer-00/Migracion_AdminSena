<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\SystemAlertNotification;
use Illuminate\Notifications\DatabaseNotification;

class AdminNotificationController extends Controller
{
    // Mostrar lista general para supervisión
    public function index()
    {
        $notifications = DatabaseNotification::latest()->paginate(15);
        return view('admin.notifications.index', compact('notifications'));
    }

    // Formulario para crear nueva notificación
    public function create()
    {
        return view('admin.notifications.create');
    }

    // Publicar y enviar la notificación a todos los usuarios
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'       => 'required|string|max:255',
            'message'     => 'required|string',
            'badge_text'  => 'required|string|max:50',
            'badge_class' => 'required|string',
            'icon'        => 'required|string',
            'type'        => 'required|string',
            'url'         => 'nullable|string',
        ]);

        $users = User::all();

        foreach ($users as $user) {
            $user->notify(new SystemAlertNotification(
                title: $data['title'],
                message: $data['message'],
                badgeText: $data['badge_text'],
                badgeClass: $data['badge_class'],
                icon: $data['icon'],
                type: $data['type'],
                url: $data['url'] ?? null
            ));
        }

        return redirect()->route('admin.notifications.index')
            ->with('success', 'Notificación emitida exitosamente a todos los usuarios.');
    }

    // Formulario para editar una notificación
    public function edit(string $id)
    {
        $notification = DatabaseNotification::findOrFail($id);
        return view('admin.notifications.edit', compact('notification'));
    }

    // Actualizar el contenido de la notificación
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'message'     => 'required|string',
            'badge_text'  => 'required|string|max:50',
            'badge_class' => 'required|string',
            'icon'        => 'required|string',
        ]);

        $notification = DatabaseNotification::findOrFail($id);

        $data = $notification->data;
        $data['title']       = $request->title;
        $data['message']     = $request->message;
        $data['badge_text']  = $request->badge_text;
        $data['badge_class'] = $request->badge_class;
        $data['icon']        = $request->icon;

        $notification->data = $data;
        $notification->save();

        return redirect()->route('admin.notifications.index')
            ->with('success', 'Notificación actualizada correctamente.');
    }

    // Eliminar una notificación emitida
    public function destroy(string $id)
    {
        $notification = DatabaseNotification::findOrFail($id);
        $notification->delete();

        return redirect()->route('admin.notifications.index')
            ->with('success', 'Notificación eliminada del sistema.');
    }
}