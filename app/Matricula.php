<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $fillable = ['alumno','curso'];

    public function matricula(){
    	return $this->hasMany('App\Curso');
    }
}
