<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class SystemAlertNotification extends Notification
{
    use Queueable;

    public function __construct(
        public string $title,
        public string $message,
        public string $badgeText,
        public string $badgeClass, // bg-danger, bg-warning, bg-info, etc.
        public string $icon,       // 🖥️, 💻, 🛠️, 👤, 📝, 🗑️
        public string $type,       // maintenance, computer, server, audit
        public ?string $url = null
    ) {}

    public function via(object $notifiable): array
    {
        return ['database'];
    }

    public function toArray(object $notifiable): array
    {
        return [
            'title' => $this->title,
            'message' => $this->message,
            'badge_text' => $this->badgeText,
            'badge_class' => $this->badgeClass,
            'icon' => $this->icon,
            'type' => $this->type,
            'url' => $this->url,
        ];
    }
}