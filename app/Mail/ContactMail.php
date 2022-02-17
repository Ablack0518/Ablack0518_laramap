<?php

namespace App\Mail;

use App\Models\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable implements shouldQueue
{
    use Queueable, SerializesModels;
    public $sms;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Message $sms)
    {
        $this->sms = $sms;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->sms->email, $this->sms->username)
            ->markdown('emails.messages.index');
    }
}