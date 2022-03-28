<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class givingAccessMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $user=[];
    public $cours=[];
    public function __construct($user , $cours)
    {
        $this->user=$user;
        $this->cours=$cours;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('contact@oifcconsulting.com')
                    ->subject('Un nouveau cours vous est accessible')
                    ->view('emails/givingAcess');
    }
}
