<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormationAvenir;

class formationavenirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $formations=FormationAvenir::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validation([
            'titre' =>  ['required'] ,
            'dateBeginning'  =>  ['required', 'date'],
            'description'  =>  ['required'],
            'lieu'  =>  ['required']
        ]);

        $formation= Formationavenir::create([
            'titre' => $request->titre,
            'dateBeginning' => $request->dateBeginning,
            'description' =>$request->description,
            'lieu'=>$request->lieu
        ]); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $formation= FormationAvenir::FindorFail($id);
     return $formation;
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
            'titre' =>  ['required'] ,
            'dateBeginning'  =>  ['required', 'date'],
            'description'  =>  ['required'],
            'lieu'  =>  ['required']
        ]);

        $formation= FormationAvenir::FindorFail($id);

        $formation->create([
            'titre' => $request->titre,
            'dateBeginning' => $request->dateBeginning,
            'description' =>$request->description,
            'lieu'=>$request->lieu
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
        $deleteFormationavenir=FormationAvenir::where('id', $id)->delete();
    }
}
