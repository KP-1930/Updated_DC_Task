<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;
    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        
        $this->user = $user;
        

        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(User $user)
    {
        // echo '<pre>';
        // print_r($this->user);
        // exit();
        return $this->markdown('emails.viewmail');
    }
}
