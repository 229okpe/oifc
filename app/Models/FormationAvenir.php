<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormationAvenir extends Model
{
    use HasFactory;
    protected $fillable=[
        'titre',
        'dateBeginning',
        'description',
        'lieu',
        'prix'
    ]; 
}
