<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Factura;

class FacturasController extends Controller
{
	public function index () 
	{
		$productos = Producto::all();
		return view('facturas.index',compact('productos'));
	}

	public function mostrarProducto (Request $request, $id) 
	{
		if ($request->ajax()) {
			$producto = Producto::Productodetalle($id);
			return response()->json($producto);
		}
	}

	public function buscar (Request $request){
        $productos = Producto::where('nombre','like','%'.$request->busqueda.'%')->get();
        return view('facturas.buscar',compact('productos'));

    }
}