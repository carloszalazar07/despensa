<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materia extends Model
{
    protected $fillable = ['nombre'];

    public function cursos(){
    	return $this->belongsToMany('App\curso');
    }
}
