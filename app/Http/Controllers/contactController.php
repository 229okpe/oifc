<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::all();
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
            'siege'=>['required'],
            'email'=>['required','email'],
            'telephone'=>['trequired', 'numeric']
        ]);

        Contact::create([
            'siege'=>$request->siege,
            'email'=>$request->email,
            'telephone'=>$request->telephone
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
        $contact=FindOrFail($id);
        return $contact;
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
            'siege'=>['required'],
            'email'=>['required','email'],
            'telephone'=>['required', 'numeric']
        ]);
        $contact=Contact::FindorFail($id);

        $contact->create([
            'siege'=>$request->siege,
            'email'=>$request->email,
            'telephone'=>$request->telephone
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
        $deletecontact=Contact::where('id', $id)->delete();
    }
}
