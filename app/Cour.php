<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cour extends Model
{
    protected $fillable = [
    	'titre','description', 'prof', 'module', 'grp', 'file'
    ];
}
