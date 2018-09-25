<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable=['nombre','marca_id'];

    public function producto(){
    	return $this->hasMany('App\Producto');
    }

    public function marca(){
    	return $this->belongsTo('App\Marca');
    }
}
