<?php

namespace App\Notifications;

use App\Models\Comment;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ArticleWasUpdated extends Notification implements NotificationMappable
{
    use Queueable;

    protected $comment;


    /**
     * ArticleWasUpdated constructor.
     * @param $article
     * @param $comment
     */
    public function __construct($comment)
    {
        $this->comment = $comment;
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

        $fromUser = $this->comment->user;

        return [
            'type' => snake_case(class_basename($this)),
            'object_type' => 'comment',
            'object_id' => $this->comment->id
        ];
    }

    public static function map($data){

        $objectType = $data['object_type'];
        $objectId = $data['object_id'];

        $classMap = [
            'comment' => Comment::class
        ];

        return $classMap[$objectType]::find($objectId);

    }
}
