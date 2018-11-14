<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Factura;
use DB; 

class FacturasController extends Controller
{
	public function index () 
	{
		$facturas = Factura::all();
		return view('facturas.index',compact('facturas'));
	}

	public function create ()
	{
		$productos = Producto::all();
		return view('facturas.create',compact('productos'));
	}

	public function store (Request $request)
	{
		$agregandoId = $request->producto_id;

		$cantidad = $request->cantidad;
	 	$precio_publico = $request->precio_publico;

		$operacion = $cantidad * $precio_publico;
    	return view('facturas.suma',compact('operacion'));
	}

	public function crear () 
	{
		$productos = Producto::all();
		return view('facturas.crear', compact('productos'));
	}

	public function guardar(Request $request, $id) 
	{
		$ultimoProducto = $request->producto->id;
		$producto= Producto::find($ultimoProducto);
		$cantidad = $request->cantidad;
		$resultado = 0;

		$operacion = $cantidad * $precio_publico = $resultado; 

	}

	public function suma(Request $request){

		$agregandoId = $request->producto_id;

		$cantidad = $request->cantidad;
		$precio_publico = $request->precio_publico;

		$operacion = $cantidad * $precio_publico;
    	return view('facturas.suma',compact('operacion'));

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
