<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth')->group( function() {

        Route::get('/interesse/{id}', 'App\Http\Controllers\adhesionCoursController@adhesionCours');
        Route::get('/cours', 'App\Http\Controllers\coursController@index'); 
         Route::get('/dashboard', function () { return view('dashboard');})->middleware(['auth'])->name('dashboard');
        Route::get('/interesse/{id}', 'App\Http\Controllers\adhesionCoursController@adhesionCours');
        Route::get('/cours', 'App\Http\Controllers\coursController@index');
        Route::get('/cours/{id}', 'App\Http\Controllers\coursController@show');
        Route::get('/mes-cours/', 'App\Http\Controllers\coursController@Mescours');
        Route::get('/ajouter-cours/', 'App\Http\Controllers\coursController@create1'); 
        Route::post('/ajouter-cours/', 'App\Http\Controllers\coursController@store1')->name("cours.store1"); 
        Route::post('/ajouter-cours/', 'App\Http\Controllers\coursController@store2')->name("cours.store2"); 
        Route::post('/ajouter-cours/', 'App\Http\Controllers\coursController@store3')->name("cours.store3"); 
        Route::patch('/modifier-cours/{id_cours}', 'App\Http\Controllers\coursController@update')->name("cours.update"); 
        Route::post('/supprimer_cours/{id_cours}', 'App\Http\Controllers\coursController@delete')->name("cours.delete"); 
        Route::get('/donner-acces/{idUser}/{idCours}', 'App\Http\Controllers\coursController@givingAcces')->name("cours.donner-acces"); 
        Route::get('/supprimer-acces/{id}', 'App\Http\Controllers\coursController@removeAcces')->name("cours.supprimeracces"); 
         Route::get('/supprimer_cours/{id_cours}', 'App\Http\Controllers\coursController@delete')->name("cours.delete"); 
        Route::get('/supprimer-album/{id}', 'App\Http\Controllers\albumController@delete')->name("album.delete");Route::patch('/modifier-album/{id}', 'App\Http\Controllers\albumController@delete')->name("album.update");
        Route::post('/mediatheque/{id}', 'App\Http\Controllers\albumController@store')->name("album.add"); 
        Route::post('/ajouter-article/', 'App\Http\Controllers\articleController@store')->name("article.add"); 
         Route::get('/modifier-article/', 'App\Http\Controllers\articleController@update')->name("article.update");
        Route::get('/supprimer-article/{id}', 'App\Http\Controllers\articleController@store')->name("article.delete"); 
        
        
});

Route::get('/', function () {return view('welcome');}); 

Route::get('/mediatheque/', 'App\Http\Controllers\albumController@index')->name("album.all"); 
Route::get('/mediatheque/{id}', 'App\Http\Controllers\albumController@show')->name("album.show"); 
Route::get('/contact','App\Http\Controllers\envoiMailController@envoiMailContact') ;
Route::get('/devis','App\Http\Controllers\envoiDevisController@envoiMailDevis') ;
Route::get('/articles/', 'App\Http\Controllers\articleController@index')->name("article.all"); 
Route::get('/articles/{id}', 'App\Http\Controllers\articleController@show')->name("article.show"); 



require __DIR__.'/auth.php';
