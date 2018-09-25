<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendedore;
use App\Marca;

class VendedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendedores = Vendedore::orderBy('created_at','asc')->paginate(5);
        return view('vendedores.index',compact('vendedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vendedore = Vendedore::all();
        return view('vendedores.create',compact('vendedore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vendedore = new Vendedore;
        $vendedore->nombre = $request->nombre;
        $vendedore->dia = $request->dia;
        $vendedore->save();
        return redirect('/vendedores'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vendedore = Vendedore::find($id);
        return view('vendedores.edit',compact('vendedore'));
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
        $vendedore = Vendedore::find($id);
        $vendedore->nombre = $request->nombre;
        $vendedore->dia = $request->dia;
        $vendedore->save();

        return redirect('/vendedores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
