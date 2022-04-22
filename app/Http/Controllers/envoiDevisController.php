<?php

namespace App\Http\Controllers;

use App\Mail\mailDevis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class envoiMailController extends Controller
{

    public function envoiMailDevis(){
   $formDevisData= [
       'nom' => 'Cedric Magloire',
       'prenom' => 'Salutation',
       'email' => 'akoffodji@gmail.com',
      
       'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque feugiat est eu sapien lacinia interdum. Sed vitae nibh urna. Etiam quis lorem ullamcorper, ullamcorper justo non, feugiat nunc. Etiam nulla quam, maximus id blandit at, sodales at quam. Nullam interdum arcu ac lacinia suscipit. Donec a purus nisl.'
   ];

        Mail::to('test@mail.test')->send( new mailDevis($formDevisData) );
        dd('Mail envoyé');
    }
}
