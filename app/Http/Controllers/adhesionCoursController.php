<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use Illuminate\Http\Request;
use App\Mail\adhesionCoursMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class adhesionCoursController extends Controller
{
    public function adhesionCours($id){

        $cours = Cours::findOrFail($id);
        $user=[
            'nom' => 'Cedric',
            "prenom" => 'Magloire',
            'email' => 'akoffodjic@gmail.com',
            'telephone' => '0022996199507'
        ];
        Mail::to('test@mail.test')->send( new adhesionCoursMail($cours,$user) );
        dd('Mail envoyé');
    }
}
