<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
      public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {  
        return $this
    ->from($address = 'neub.info.bd@gmail.com', $name = 'Mubarak Hussain')
    ->subject('Here is my Email')
    ->view('mail.mail');
        
        // // $wel =  "Welcome";
        // return $this->view('mail.mail')->with($wel);
    }
}
