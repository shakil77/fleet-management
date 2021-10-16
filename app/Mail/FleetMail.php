<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FleetMail extends Mailable
{
    use Queueable, SerializesModels;
    public $_message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        //
        $this->_message = $message;
    }

    /**
     * Builecho "Your OTP for this transaction is $otp, which is valid for 15 minuts only.";d the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.name');
                    // ->from('mohammadraza0423@gmail.com')
                    // ->to('mohammadraza0423@gmail.com')
                    // ->subject('OTP');
    } 
}
