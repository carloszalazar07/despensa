<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    protected $fillable = ['nombre','edad','telefono'];
}

	public function scopeSearch ($query, $nombre)
	{
		return $query->where('nombre', 'LIKE', "%$nombre%");
	}
