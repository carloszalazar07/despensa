<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedore extends Model
{
    protected $fillable= ['nombre','dia'];

    public function marca(){
    	return $this->hasMany('App\Marca');
    }
}
