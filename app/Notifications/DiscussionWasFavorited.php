<?php

namespace App\Notifications;

use App\Models\Discussion;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Auth;

class DiscussionWasFavorited extends Notification implements NotificationMappable
{
    use Queueable;


    protected $discussion;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Discussion $discussion)
    {
        $this->discussion = $discussion;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }



    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        $user = Auth::user();
        return [
            'discussion_id' => $this->discussion->id,
            'user_id' => $user->id
        ];
    }

    public static function map($data)
    {
        $discussion = Discussion::query()->find($data['discussion_id']);
        $user = User::query()->find($data['user_id']);

        return (object)[
            'discussion' => $discussion,
            'user' => $user
        ];
    }
}
