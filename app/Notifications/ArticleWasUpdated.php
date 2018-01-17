<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ArticleWasUpdated extends Notification
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
            'from_type' => 'user',
            'from_id' => $fromUser->id,
            'message' => $fromUser->name .'评论了文章'.$this->comment->commentable->title,
            'object_type' => 'comment',
            'object_id' => $this->comment->id,
            'link' => $this->comment->path()
        ];
    }
}
