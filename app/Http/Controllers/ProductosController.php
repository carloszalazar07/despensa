<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use App\Marca;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $productos = Producto::orderBy('created_at')->get();
        // $nombre = $request->nombre->get('nombre');
		$productos = Producto::orderBy('created_at','asc')->paginate(4);
		return view('productos.index',compact('productos'));
    }

    public function buscar (Request $request){
        $productos = Producto::where('nombre','like','%'.$request->busqueda.'%')->get();
        return view('productos.index',compact('productos'));

    }

    public function suma(Request $request){

    	$agregandoId = ([6,2,5]);

    	$producto = Producto::find($agregandoId);

    	$totalCost = $producto->sum('precio_publico');
    	return view('productos.mostrar',compact('totalCost'));
    	// $producto = Producto::all();

    	// return $totalCost = DB::table('productos')->sum('precio_publico');

    	// return view::make('productos.mostrar',array('totalCost' => $totalCost));
    	
    	// $producto->precio_publico = $request->precio_publico;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        $marcas = Marca::all();
        return view('productos.create',compact('categorias','marcas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Producto;
        $producto->nombre = $request->nombre;
        $producto->precio_publico = $request->precio_publico;
        $producto->precio_costo = $request->precio_costo;
        $producto->categoria_id = $request->categoria_id;
        $producto->marca_id = $request->marca_id;

        $producto->save();
        return redirect('/productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto= Producto::find($id);
        return view('productos.show',compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        return view('productos.edit',compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);
        $producto->nombre = $request->nombre;
        $producto->precio_publico = $request->precio_publico;
        $producto->precio_costo = $request->precio_costo;
        $producto->categoria_id = $request->categoria_id;
        $producto->marca_id = $request->marca_id;

        $producto->save();
        return redirect('/productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::find($id)->delete();
        return redirect('/productos');
    }
}
