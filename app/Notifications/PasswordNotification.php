<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class PasswordNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public $customer;

    /**
     * Create a new notification instance.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->customer = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return MailMessage
     */
    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->line('Hello '.$this->customer['first_name'])
            ->line('Your account is created. Please use the following password to login:')
            ->line('Password: '.$this->customer['password'])
            ->action('Login now!', route('customer.login'))
            ->line('Thank you for using our application!');
    }
}
