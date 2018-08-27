<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
    protected $fillable = ['nombre'];

    public function alumnos(){
    	return $this->belongsToMany('App\alumno');
    }

    public function materias(){
    	return $this->belongsToMany('App\materia');
    }
}
