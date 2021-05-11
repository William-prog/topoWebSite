<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JobApplication extends Mailable
{
    public $jobTitle;
    public $senderName;
    public $senderEmail;
    public $senderNumber;
    public $cvPath;

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($jobTitle, $senderName, $senderEmail, $senderNumber, $cvPath)
    {
        $this->jobTitle = $jobTitle;
        $this->senderName = $senderName;
        $this->senderEmail = $senderEmail;
        $this->senderNumber = $senderNumber;
        $this->cvPath = $cvPath;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.message_contact_form');
    }
}
