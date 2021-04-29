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

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($jobTitle, $senderName, $senderEmail, $senderNumber)
    {
        $this->jobTitle = $jobTitle;
        $this->senderEmail = $senderName;
        $this->senderEmail = $senderEmail;
        $this->senderNumber = $senderNumber;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('sist3m4s.it@topo-int.com', "Servicios y Equipos Topo")
                    ->to('dummy@topo-int.com')
                    ->subject('Aplicación de trabajo')   
                    ->markdown('emails.message_contact_form');
    }
}
