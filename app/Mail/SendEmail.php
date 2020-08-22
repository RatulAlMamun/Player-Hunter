<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $sbj;
    public $msg;

    public function __construct($subject, $message)
    {
        $this->sub = $subject;
        $this->msg = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = $this->sub;
        $message = $this->msg;
        $message = explode("|",$message);
        $msg1 = $message[0];
        $msg2 = $message[1];
        $msg3 = $message[2];
        return $this->view('mailtemplate', ['message1' => $msg1, 'message2' => $msg2, 'message3' => $msg3])->subject($subject);
    }
}
