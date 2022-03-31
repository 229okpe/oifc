<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {return view('welcome');});

Route::get('/dashboard', function () { return view('dashboard');})->middleware(['auth'])->name('dashboard');

Route::get('/interesse/{id}', 'App\Http\Controllers\adhesionCoursController@adhesionCours');

Route::get('/cours', 'App\Http\Controllers\coursController@index');

Route::get('/cours/{titre}', 'App\Http\Controllers\coursController@show');

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


//Album

Route::get('/mediatheque/', 'App\Http\Controllers\albumController@index')->name("album.all"); 

Route::get('/mediatheque/{id}', 'App\Http\Controllers\albumController@show')->name("album.show"); 

Route::post('/mediatheque/{id}', 'App\Http\Controllers\albumController@store')->name("album.add"); 

Route::get('/supprimer-album/{id}', 'App\Http\Controllers\albumController@delete')->name("album.delete");

Route::patch('/modifier-album/{id}', 'App\Http\Controllers\albumController@delete')->name("album.update");


//Articles
Route::get('/articles/', 'App\Http\Controllers\articleController@index')->name("article.all"); 

Route::get('/articles/{id}', 'App\Http\Controllers\articleController@show')->name("article.show"); 

Route::post('/ajouter-article/', 'App\Http\Controllers\articleController@store')->name("article.add"); 

Route::get('/modifier-article/', 'App\Http\Controllers\articleController@update')->name("article.update");

Route::get('/supprimer-article/{id}', 'App\Http\Controllers\articleController@store')->name("article.delete"); 


require __DIR__.'/auth.php';