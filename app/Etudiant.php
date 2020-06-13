<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $fillable = [
    	'nom', 'prenom', 'cne', 'grp', 'note', 'image'
    ];
}
