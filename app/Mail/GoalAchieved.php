<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class GoalAchieved extends Mailable
{
    use Queueable, SerializesModels;

    public $count;
    protected $filepath;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($count, $filepath)
    {
        $this->count = $count;
        $this->filepath = $filepath;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("¡Bet Play - Meta {$this->count}!")
            ->view('emails.goal_achieved')
            ->attach(storage_path("app/{$this->filepath}"));
    }
}
