<?php

namespace App\Http\Controllers;

use App\Mail\mailDevis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class envoiMailController extends Controller
{

    public function envoiMailDevis($request){

        $request->validation([
            'nom'=>['required'],
            'prenom'=>['required'],
            'email'=>['required', 'email'],
            'message'=>['required'],
        ]);

   
   $formDevisData= [
       'nom' => $request->nom,
       'prenom' =>$request->prenom,
       'email' => $request->email,
        'message' => $request->message
         ];

    $mail= Mail::to('test@mail.test')->send( new mailDevis($formDevisData) );
    
    $mail->assertOK();
    }
}
