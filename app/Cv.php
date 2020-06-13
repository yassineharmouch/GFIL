<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cv extends Model
{
  
    protected $fillable = [
    	'nom','prenom', 'adress', 'filiere', 'niveau_scolaire', 'description', 'file'
    ];


   

}
