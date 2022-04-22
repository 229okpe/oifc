<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class devisMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data=[];

    public function __construct(Array $formDevis)
    {

        $this->data=$formDevis;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('contact@oifcconsulting.com')
                    ->subject("Vous  avez recu un nouvelle demande de devis !")
                    ->view('emails.mailDevis');
    }
}
