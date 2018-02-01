<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class SendActivatedEmail extends Notification
{
    use Queueable;

    public $user;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject($this->user->name.':您好,欢迎注册Note,请激活您的邮箱')
            ->level('success')
            ->greeting('亲爱的 '.$this->user->name)
            ->line('首先感谢您加入Note社区！')
            ->line('请您在发表言论时，遵守当地法律法规。')
            ->line('Note社区，发现不同的乐趣。'.url('/'))
            ->action('激活您的邮箱', route('email.verify',$this->user->activation_token))
            ->line('如果您之前并没有发起激活请求的话请忽略此邮件');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
