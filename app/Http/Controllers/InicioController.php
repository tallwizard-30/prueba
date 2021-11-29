<?php

namespace App\Http\Controllers;

use App\inicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\proyectos;

class InicioController extends Controller
{
    public function __construct(){

        $this->middleware('auth');

    }
    public function index()
    {

        return view('modulos.editar');
       
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\inicio  $inicio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $project = DB::select('SELECT `departamentos`.`nombre_departamento`, 
        `pacientes`.`id`, `pacientes`.`numero_documento`, `pacientes`.`nombre1`, 
        `pacientes`.`nombre2`, `pacientes`.`apellido1`, `pacientes`.`apellido2`,pacientes.genero_id,pacientes.tipo_documento_id,pacientes.departamento_id,pacientes.municipio_id,
         `genero`.`nombre` as genero, `municipios`.`nombre_municipio`, tipos_documento.nombre as tipo
        FROM `departamentos` 
            LEFT JOIN `pacientes` ON `pacientes`.`departamento_id` = `departamentos`.`id` 
            LEFT JOIN `genero` ON `pacientes`.`genero_id` = `genero`.`id` 
            LEFT JOIN `municipios` ON `municipios`.`departamento_id` = `departamentos`.`id`
            LEFT JOIN `tipos_documento` ON `pacientes`.`tipo_documento_id` = `tipos_documento`.`id` 
            WHERE pacientes.tipo_documento_id=tipos_documento.id AND departamentos.id= pacientes.departamento_id AND pacientes.municipio_id=municipios.id and genero.id=pacientes.genero_id and pacientes.id = '.$id.'
            ');

    

    return view('modulos.editar')->with(['project'=> $project,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\inicio  $inicio
     * @return \Illuminate\Http\Response
     */
    public function edit(inicio $inicio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\inicio  $inicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, proyectos $proyectos, $id )
    {
        
        proyectos::where('id',$id)->first()->update($request->all());

        return redirect('gestor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\inicio  $inicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(inicio $inicio)
    {
        //
    }
}
