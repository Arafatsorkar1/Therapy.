<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Str;

class OrderNotifaction extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    private $assessment;
    public function __construct($assessment)
    {
        $this->assessment = $assessment;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->greeting('Hello!')
                    ->line('Thank you very much for taking this service')
                    ->line('Your Assessment is : '.$this->assessment->category->name)
                    ->line('Payment Method:'.Str::upper($this->assessment->payment_method))
                    ->line('Sended Number:'.$this->assessment->sended_number)
                    ->line('Price:'.$this->assessment->pay_balance)
                    ->action('Go To Website', route('home'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
