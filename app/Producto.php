<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable= ['nombre','precio_publico','precio_costo','categoria_id'];

    public function categoria(){
    	return $this->belongsTo('App\Categoria');
    }

    public function marca(){
    	return $this->belongsTo('App\Marca');
    }

    public function scopeNombre($query, $nombre){
    	if ($nombre) {
    		return $query->where('nombre','LIKE', "%".$nombre."%");
    	}
    }
}
