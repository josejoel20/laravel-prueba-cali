<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\prueba;
use DB;

class PruebaController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $prueba=prueba::paginate(5);
        //return dd($prueba);
        return view('prueba.index',compact('prueba'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
         return view('prueba.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prueba=new prueba;
                //nombre del campo =  nombre de los input
        $prueba->nom_ape=$request->nom_ape;
        $prueba->tipo_documento=$request->tipo_documento;
        $prueba->n_documento=$request->n_documento;
        $prueba->correo_electronico=$request->correo_electronico;
        $prueba->fecha_nacimiento=$request->fecha_nacimiento;
        $prueba->direccion=$request->direccion;
        $prueba->save();
        //return 'Registro Guardado Correctamente!';
        //return dd($request);
        return redirect()->route('prueba.index')->with('datos','Registro guardado correctamente');
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
        $prueba = Prueba::findOrFail($id);
        return view('prueba.edit',compact('prueba'));
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
        $prueba = Prueba::findOrFail($id);
        //dd($request);
        $prueba->nom_ape=$request->nom_ape;
        $prueba->tipo_documento=$request->tipo_documento;
        $prueba->n_documento=$request->n_documento;
        $prueba->correo_electronico=$request->correo_electronico;
        $prueba->fecha_nacimiento=$request->fecha_nacimiento;
        $prueba->direccion=$request->direccion;
        $prueba->save();
        //return 'Registro Guardado Correctamente!';
        //return dd($request);
        return redirect()->route('prueba.index')->with('datos','Registro actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prueba = Prueba::findOrFail($id);
        $prueba->delete();
        return redirect()->route('prueba.index')->with('datos','Registro eliminado correctamente');
    }

    public function confirm($id)
    {
        $prueba = Prueba::findOrFail($id);
        return view('prueba.confirm', compact('prueba'));
    }



}
