<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class FacturasController extends Controller
{
	public function index () 
	{
		$productos = Producto::all();
		return view('facturas.index',compact('productos'));
	}

	public function create () 
	{
		return view('facturas.create');
	}
}
