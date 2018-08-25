<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    protected $fillable = ['matricula_id','nombre','edad','telefono'];

    public function matricula(){
    	return $this->belongsTo('App\Matricula');
    }
}
