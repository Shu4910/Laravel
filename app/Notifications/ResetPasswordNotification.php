<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ResetPasswordNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($url)                      //この行を修正
    {
        $this->url = $url;                                 //この行を修正
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
    //ここから修正
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject(config('app.name'). ' パスワードリセットURLの送付')
            ->greeting('いつもご利用頂きありがとうございます')
            ->action('パスワードリセット', $this->url)
            ->line('こちらからパスワードリセットを行ってください');
    }
    //ここまで修正

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
