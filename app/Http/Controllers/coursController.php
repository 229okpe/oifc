<?php
namespace App\Http\Controllers;

use auth;
use App\Models\User;
use App\Models\Cours;
use App\Models\Activites;
use Illuminate\Http\Request;
use App\Mail\givingAccessMail;
use App\Models\Map_User_Cours;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class coursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cours = Cours::all();

        return $cours; 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create1()
    {   
        return view("ajout1");
    }
    public function store1(Request $request)
    {     
        $code=substr(sha1(uniqid()),0,5);
       $request->validate([
            'titre' => ['required'],
            'description' => ['required'],
            'nbrechapitre' => ['required', 'numeric'],
            'montant' => ['required', 'numeric']
        ]);  
     $imageName=time().'-'.str_replace(' ','-',$request->titre).'.'.$request->image->extension();
        $path = $request->file('image')->storeAs('imageCours',  $imageName, 'public'); 
      
        
         
       Session::put('titreCours', $request->titre);
        Session::put('descriptionCours', $request->description);
        Session::put('nbreChapitreCours', $request->nbreChapitre);
        Session::put('coutCours', $request->cout);
        Session::put('montantCours', $request->montant);
        Session::put('imageCours', $path);
        Session::put('id_cours', $code); 

        dd("Cours crée");
         
 
                }
        

    public function store2(Request $request)
    {   
        for($i=1;$i<= Session::get('nbreChapitreCours');$i++) {
       
            $fichier_name=time().'-'.$_FILES['fichier_outil-'.$i]['name'];
            $path = $request->file('fichier_outil-'.$i)->storeAs('imageCours', $fichier_name, 'public'); 
            Session::put("outils".$i, $fichier_name);  
            Activites::create([
                'titre'=>$request->titre.$i,
                'id_cours'=>Session::get('id_cours'),
                'file'=>$path,
                'telechargeable'=>$request->downloadable
            ]);
                
            }  
    }

    public function store3(Request $request)
    {   
        Cours::create([
            'titre' =>Session::get('titre'),
            'description' =>Session::get('description'),
            'nbre_chapitre' =>Session::get('nbreChapitreCours'),
            'montant' =>Session::get('montantCours'),
            'image' =>Session::get('imageCours'),
            'id_cours' => Session::get('id_cours')
        ]);

        for($i=1;$i<=Session::get('nbrechapitreCours');$i++) {
             Session::forget("outils".$i);
     }
        Session::forget("nbrechapitreCours");
        Session::forget('titreCours');
        Session::forget('descriptionCours');
        Session::forget('niveauCours');
        Session::forget('id_cours');
        Session::forget('imageCours'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $title
     * @return \Illuminate\Http\Response
     */
    public function show($title)
    {
        $cours = Cours::where('titre', $title)->get();

        return $cours; 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validation([
            'titre' => ['required'],
            'description' => ['required'],
            'nbrechapitre' => ['required', 'numeric'],
            'montant' => ['required', 'numeric']
         ]);
    
         $cours = Cours::FindorFail($id);

         $cours->update([
            'titre' =>$request->titre,
            'description' =>$request->description ,
            'nbre_chapitre' =>$request->nbreChapitreCours,
            'montant' =>$request->montantCours,
            'image' =>$request->imageCours, 
        ]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteCours=Cours::where('id', $id)->delete();
    }

    public function mesCours(){
       //  $idUser=auth()->$user->id;
          $idUser=1;

        $Ids= Map_User_Cours::where('id_etudiant', $idUser)
                        ->take(10)
                        ->get('id_cours');
         if($Ids->count() > 0){                                                                                                                                                         
            foreach($Ids as $id){ 
              
                    $mescours[]= Cours::where('id', $id->id_cours)->get();
                   
                    foreach ($mescours as $cours)
                    {
                        foreach ($cours as $cour)
                        {
                 
                          $mesactivites[] = Activites::where('id_cours',$cour->id_cours) ->get();
                       }
                    }
                } 
            }
           else{
                    dd("Aucun cours trouvé");
                }
                return [$mescours,$mesactivites];
            }
    
          
    

     public function givingAcces($idUser, $idCours){

        $idUser=$idUser;
        $idCours=$idCours;

        Map_User_Cours::create([
            'id_etudiant' => $idUser,
            'id_cours' => $idCours,

        ]);
        $user=User::findorFail($idUser);
        $cours=Cours::findorFail($idCours);
        Mail::to('test@mail.test')->send( new givingAccessMail($user, $cours));
        dd('Lien effectué');

     }

     public function removeAcces($id){
        $removeAcces=Map_User_Cours::where('id', $id)->delete();
     }

}