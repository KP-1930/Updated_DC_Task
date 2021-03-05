<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Mail\MultiMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(){

        $details = [

                'title' => 'Hello Everyone',
                'body'  => 'welcome!!!'

        ];

            $mails = User::pluck('email')->toArray();
            
            \Mail::to($mails)->send(new MultiMail($details));
            return "Send Mail";
    
    
    
            
            
           
           
            
    }
}
