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
         

});

//Route::put('/contact','App\Http\Controllers\envoiMailController@envoiMailContact') ;




require __DIR__.'/auth.php';
