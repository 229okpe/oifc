<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class albumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::all();

        return $albums; 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { $i=0;
        $request->validate([
            'titre' => ['required'],
            'description' => ['required'],
            'photos' => 'required',
            'photos.*' => 'mimes:jpg,png,jpeg'
        ]);  
        $folder=str_replace(' ','-',$request->titre);
        foreach($request->file('photos') as $file)
        {  
            $path = $request->file('photos')->storeAs('mediatheque/'.$folder, $i.$request->image->extension(), 'public'); 
            $path.=$i.$request->image->extension().';';
            $i++;
         }
        
         Album::create([
            'titre' =>$request->titre,
            'description' =>$request->description,
            'photos' =>$path
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
        $album=FindOrFail($id);
        return $album;
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
            'description' => ['required']
         ]);
    
         $album = Album::FindorFail($id);

         $cours->update([
            'titre' =>$request->titre,
            'description' =>$request->description
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
        $deleteAlbum=Album::where('id', $id)->delete();
    }
}
