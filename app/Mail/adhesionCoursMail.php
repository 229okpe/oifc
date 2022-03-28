<?php

namespace App\Mail;

use App\Models\Cours;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class adhesionCoursMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
   public $coursData=[];
   public $userData=[];
    public function __construct( $cours, $user)
    {
        $this->userData=$user;
         $this->coursData=$cours; 
  
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('contact@oifcconsulting.com')
                    ->subject('Un internaute est interessé par un module')
                    ->view('emails/mailAdhesion');
    }
}
