<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class articleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $articles = Article::all();

        return $articles; 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => ['required'],
            'contenu' => ['required'],
            'photo' => ['required', 'mimes:jpg,png,jpeg'], 
        ]);  
         $imageName=time().'-'.str_replace(' ','-',$request->titre).'.'.$request->image->extension();
        $path = $request->file('image')->storeAs('blog',  $imageName, 'public'); 
      
        Article::create([
            'titre'=>$request->titre,
            'contenu'=>$request->contenu,
            'titre'=>$request->$path
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
        $article=FindOrFail($id);
        return $article;
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
        $request->validate([
            'titre' => ['required'],
            'contenu' => ['required'],
            'photo' => ['required', 'mimes:jpg,png,jpeg'], 
        ]);  
         $imageName=time().'-'.str_replace(' ','-',$request->titre).'.'.$request->image->extension();
        $path = $request->file('image')->storeAs('blog',  $imageName, 'public'); 
      
        $article::FindorFail($id);
        $article->create([
            'titre'=>$request->titre,
            'contenu'=>$request->contenu,
            'titre'=>$request->$path
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
        $deletearticle=Article::where('id', $id)->delete();
    }
}
