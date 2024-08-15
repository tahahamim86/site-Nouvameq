<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function contact(){
        return view('pages.contact');
    }
    public function sendEmail(Request $request){
    
      $detalis=[
        'name'=> $request->name,
        'prenom'=> $request->prenom,
        'email'=>$request->email,
        'num'=>$request->num, 'local'=> $request->local,
        'poste'=> $request->poste,
       
        
        'organisation'=> $request->organisation,
        'msg'=>$request->msg
    
      ];
   Mail::to('masterfire127@gmail.com')->send(new ContactMail($detalis));
      return back()->with('message_sent','Your message has been sent succesfully');
    }
}
