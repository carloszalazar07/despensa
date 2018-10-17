<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable= ['nombre','precio_publico','precio_costo','categoria_id','marca_id'];

    public function categoria(){
    	return $this->belongsTo('App\Categoria');
    }

    public function marca(){
    	return $this->belongsTo('App\Marca');
    }

    public function factura () {
        return $this->belongsToMany('App\Factura','detalle');
    }

    public function reprecentante () {
        return $this->belongsToMany('App\Reprecentante','producto_reprecentante');
    }

}
