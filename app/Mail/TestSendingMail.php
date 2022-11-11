<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestSendingMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data = ["name" => "The Test Coder"];
    public $name;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        // $this->name = "Amit Shrestha";
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('email', ["name" => "The Test Coder"]);
        return $this->view('email');
    }
}
