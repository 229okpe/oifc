<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class servicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
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
            'titre' => ['required'],
            'description' => ['required'],
            'type' => ['required'],
            'image' => ['file','mimes:jpg,png,jpeg']
        ]) ;
        $imageName=time().'-'.str_replace(' ','-',$request->titre).'.'.$request->image->extension();
        $path = $request->file('image')->storeAs('service',  $imageName, 'public'); 
        Service::create([
            'titre' => $request->titre,
            'description' =>  $request->description,
            'image' => $path,
            'type' => $request->type
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
        $service= Service::FindorFail($id);
        return $service;
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
            'image' => ['required'],
            'type' => ['file','mimes:jpg,png']
        ]) ;
        $imageName=time().'-'.str_replace(' ','-',$request->titre).'.'.$request->image->extension();
        $path = $request->file('image')->storeAs('service',  $imageName, 'public'); 
        $service= Service::FindorFail($id);
        
        $service->create([
            'titre' => $request->titre,
            'description' =>  $request->description,
            'image' => $path,
            'type' => $request->type
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
        $deleteservice=Service::where('id', $id)->delete();
 
    }
}
