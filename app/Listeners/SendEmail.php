<?php

namespace App\Listeners;

use App\Models\User;
use App\Mail\TestMail;
use App\Events\UserCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmail implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(UserCreated $event)
    {
                    // $user = User::get();
                    //         $content = "Hello[NAME]";
                    //     foreach($user as $value) {
                    //         $values = $value->name;
                    //         $contents =  str_replace("[NAME]",'',$values);
                    //         //dd($contents);
                    //}

                  //  Mail::to($event->user)->send( new TestMail($event->user));
            
            
            
               
    }
}
