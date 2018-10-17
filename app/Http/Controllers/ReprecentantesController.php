<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reprecentante;
use App\Producto;

class ReprecentantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reprecentantes = Reprecentante::orderBy('created_at','asc')->paginate(5);
        return view('reprecentantes.index',compact('reprecentantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reprecentante = Reprecentante::all();
        return view('reprecentantes.create',compact('reprecentante'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reprecentante = new Reprecentante;
        $reprecentante->nombre = $request->nombre;
        $reprecentante->dia = $request->dia;
        $reprecentante->save();
        return redirect('/reprecentantes'); 
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
        $reprecentante = Reprecentante::find($id);
        return view('reprecentantes.edit',compact('reprecentante'));
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
        $reprecentante = Reprecentante::find($id);
        $reprecentante->nombre = $request->nombre;
        $reprecentante->dia = $request->dia;
        $reprecentante->save();

        return redirect('/reprecentantes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reprecentante = Reprecentante::find($id)->delete();
        return redirect('/reprecentantes');
    }
}
