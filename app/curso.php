<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
    protected $fillable = ['matricula_id','nombre'];

    public function matricula(){
    	return $this->belongsTo('App\Matricula');
    }
}
