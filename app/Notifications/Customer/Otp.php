<?php

namespace App\Notifications\Customer;

use App\Models\Customer;
use \App\Mail\BareMail;
//
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class Otp extends Notification
{
    use Queueable;

    private $data;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Customer $customer)
    {
        $this->messageScrapper = app()->makeWith('App\Services\Contracts\MessageScrapperInterface');
        $this->data = $this->messageScrapper->sendOtp($customer);
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array
     */
    public function via($notifable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return \App\Mail\BareMail
     */
    public function toMail($notifiable)
    {
        return (new BareMail)
            ->to($notifiable->email)
            ->subject($this->data['subject'])
            ->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
            ->view('emails.message', $this->data);
    }
}
