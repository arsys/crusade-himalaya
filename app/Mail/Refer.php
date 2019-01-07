<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Refer extends Mailable
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
        $this->from($this->data['sender']);
        $this->subject($this->data['subject']);
        $this->to($this->data['receiver']);
        if (isset($this->data['receiver2'])) {
            $this->to($this->data['receiver2']);
        }
        if (isset($this->data['receiver3'])) {
            $this->to($this->data['receiver3']);
        }
        if (isset($this->data['copy'])) {
            $this->to($this->data['sender']);
        }
        $this->replyTo($this->data['sender']);
        return $this->markdown('emails.refer');
    }
}
