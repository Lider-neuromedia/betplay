<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Client;

class CodeAssigned extends Mailable
{
    use Queueable, SerializesModels;

    public $client;
    public $code;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
        $this->code = $client->code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->code == null) {

            return $this->subject('¡Lo sentimos!')->view('emails.betplay_lose');

        }

        return $this->subject('¡Betplay te felicita!')->view('emails.betplay_win');
    }
}
