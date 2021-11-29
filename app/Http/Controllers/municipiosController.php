<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proyectos;
use Illuminate\Support\Facades\DB;
class municipiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
               

        return view('modulos.registrar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function stores(Request $request)
    {
         $datos = request()->validate([
    'tipo_documento_id'=>['required','integer','max:50'],
    'numero_documento'=>['required'],
    'nombre1'=>['required','string','max:50'],
    'nombre2'=>['required','max:50'],
    'apellido1'=>['required','string','max:50'],
    'apellido2'=>['required','string','max:50'],
    'genero_id'=>['required','integer','max:50'],
    'departamento_id'=>['required','integer','max:50'],
    'municipio_id'=>['required','integer','max:50'],


   ]);



   DB::table('pacientes')->insert(['tipo_documento_id'=> $datos['tipo_documento_id'],'numero_documento'=> $datos['numero_documento'],

    'nombre1'=> $datos['nombre1'],'nombre2'=> $datos['nombre2'],'apellido1'=> $datos['apellido1'],'apellido2'=> $datos['apellido2'],
    'genero_id'=> $datos['genero_id'],'departamento_id'=> $datos['departamento_id'],'municipio_id'=> $datos['municipio_id'],]);

    
   return redirect('gestor');

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
        //
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
        //
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
