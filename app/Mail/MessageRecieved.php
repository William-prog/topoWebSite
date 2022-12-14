<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageRecieved extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {        
        return $this->from('sist3m4s.it@topo-int.com', "Bolsa de trabajo | Servicios y Equipos TOPO S.A.  de C.V.")
                    ->subject('Aplicación de trabajo')
                    ->markdown('emails.message'); 
    }
}
