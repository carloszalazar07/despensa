<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $fillable = ['nombre','vendedor_id'];

    public function producto(){
    	return $this->hasMany('App\Producto');
    }

    public function vendedore(){
    	return $this->belongsTo('App\Vendedor');
    }
}
