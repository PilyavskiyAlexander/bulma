<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ClientRequest extends Mailable
{
    use Queueable, SerializesModels;

    public $clientRequest;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($clientRequest)
    {
        $this->clientRequest = $clientRequest;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.client_request')
                    ->attach($this->clientRequest->file);
    }
}
