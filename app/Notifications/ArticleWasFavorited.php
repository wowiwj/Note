<?php

namespace App\Notifications;

use App\Models\Article;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Auth;

class ArticleWasFavorited extends Notification implements NotificationMappable
{
    use Queueable;

    protected $article;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Article $article)
    {
        $this->article = $article;
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
            'article_id' => $this->article->id,
            'user_id' => $user->id
        ];
    }

    public static function map($data)
    {
        $article = Article::query()->find($data['article_id']);
        $user = User::query()->find($data['user_id']);

        return (object)[
            'article' => $article,
            'user' => $user
        ];
    }
}
