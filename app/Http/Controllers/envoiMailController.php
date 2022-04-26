<?php

namespace App\Http\Controllers;

use App\Mail\mailContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class envoiMailController extends Controller
{

    public function envoiMailContact(){
    /*    $request->validation([
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
         ]; */
   $formContactData= [
       'nom' => 'Cedric Magloire',
       'email' => 'akoffodji@gmail.com',
       'sujet' => 'Salutation',
       'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque feugiat est eu sapien lacinia interdum. Sed vitae nibh urna. Etiam quis lorem ullamcorper, ullamcorper justo non, feugiat nunc. Etiam nulla quam, maximus id blandit at, sodales at quam. Nullam interdum arcu ac lacinia suscipit. Donec a purus nisl.'
   ];

   $send=Mail::send( new mailContact($formContactData) );
     
   return  'message envoyer';
      /*  if(){
            return response()->json([
                'message' => 'success'
            ]);
        }
        else {
            return response()->json([
                'message' => 'error'
            ]); 
        }*/
       

    }
}

