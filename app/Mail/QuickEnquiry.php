<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class QuickEnquiry extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
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
        $this->from($this->data['email']);
        $this->to('mail@crusadehimalaya.com');
        $this->bcc('sonam@crusadehimalaya.com');
        $this->replyTo($this->data['email']);    
        $this->subject($this->data['subject']);    
        return $this->markdown('emails.enquiry');
    }
}
