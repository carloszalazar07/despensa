<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $fillable = ['cliente_id','iva','subtotal','total'];

    public function Producto () {
        return $this->belongsToMany('App\Producto', 'detalle');
    }

    public static function Productodetalle ($id) {
        return Producto::where('id','=',$id)->get();
    }
}
