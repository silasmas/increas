<?php

namespace App\Observers;

use App\Models\User;
use App\Models\Message;
use App\Models\Requete;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageNotificationMail;

class MessageObserver
{
    /**
     * Handle the Message "created" event.
     */
    public function created(Message $message): void
    {
        $this->notifyUsers($message, 'envoyée');
    }

    /**
     * Handle the Message "updated" event.
     */
    public function updated(Message $message): void
    {
        $this->notifyUsers($message, 'modifiée');
    }

    /**
     * Handle the Message "deleted" event.
     */
    public function deleted(Message $message): void
    {
        $this->notifyUsers($message, 'supprimer');
    }

    /**
     * Handle the Message "restored" event.
     */
    public function restored(Message $message): void
    {
        //
    }

    /**
     * Handle the Message "force deleted" event.
     */
    public function forceDeleted(Message $message): void
    {
        //
    }
    protected function notifyUsers(Message $message, string $action): void
    {
        // Récupérer tous les utilisateurs notifiables
        $users = User::get();

        foreach ($users as $user) {
            Mail::to($user->email)->send(new MessageNotificationMail($user, $message, $action));
        }
    }
}
