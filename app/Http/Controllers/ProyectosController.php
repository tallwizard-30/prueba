<?php

namespace App\Http\Controllers;

use App\proyectos;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\storage;

class ProyectosController extends Controller
{
    public function __construct(){

        $this->middleware('auth');

    }
    public function index()
    {

       
        $project = DB::select('SELECT `departamentos`.`nombre_departamento`, 
        `pacientes`.`id`, `pacientes`.`numero_documento`, `pacientes`.`nombre1`, 
        `pacientes`.`nombre2`, `pacientes`.`apellido1`, `pacientes`.`apellido2`,
         `genero`.`nombre` as genero, `municipios`.`nombre_municipio`, tipos_documento.nombre as tipo
        FROM `departamentos` 
            LEFT JOIN `pacientes` ON `pacientes`.`departamento_id` = `departamentos`.`id` 
            LEFT JOIN `genero` ON `pacientes`.`genero_id` = `genero`.`id` 
            LEFT JOIN `municipios` ON `municipios`.`departamento_id` = `departamentos`.`id`
            LEFT JOIN `tipos_documento` ON `pacientes`.`tipo_documento_id` = `tipos_documento`.`id` 
            WHERE pacientes.tipo_documento_id=tipos_documento.id AND departamentos.id= pacientes.departamento_id AND pacientes.municipio_id=municipios.id and genero.id=pacientes.genero_id
            ');

    

    return view('modulos.gestorProyectos')->with(['project'=> $project,]);
       
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function store(Request $request)
    {
     
    }



    
    public function show(proyectos $proyectos)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\proyectos  $proyectos
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\proyectos  $proyectos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, proyectos $proyectos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\proyectos  $proyectos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         DB::table('pacientes')->delete($id);

         
         return redirect('/gestor');
          
    }
}
