<?php

namespace App\Observers;

use App\Models\Apprentice;
use App\Models\User;
use App\Notifications\SystemAlertNotification;

class ApprenticeObserver
{
    /**
     * Se dispara automáticamente cuando se crea un nuevo registro.
     */
    public function created(Apprentice $apprentice): void
    {
        // Notificar a todos los usuarios/administradores
        $users = User::all();

        foreach ($users as $user) {
            $user->notify(new SystemAlertNotification(
                title: 'Nuevo Aprendiz Registrado',
                message: "Se registró al aprendiz <strong>{$apprentice->name}</strong> en el sistema.",
                badgeText: 'Auditoría | Registro',
                badgeClass: 'bg-info',
                icon: '👤',
                type: 'audit',
                url: route('apprentice.index')
            ));
        }
    }

    /**
     * Se dispara automáticamente cuando se edita un registro existente.
     */
    public function updated(Apprentice $apprentice): void
    {
        $users = User::all();

        foreach ($users as $user) {
            $user->notify(new SystemAlertNotification(
                title: 'Registro Modificado',
                message: "Se actualizaron los datos del aprendiz <strong>{$apprentice->name}</strong>.",
                badgeText: 'Auditoría | Edición',
                badgeClass: 'bg-primary',
                icon: '📝',
                type: 'audit',
                url: route('apprentice.index')
            ));
        }
    }
}