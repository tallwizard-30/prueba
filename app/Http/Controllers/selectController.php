<?php

namespace App\Http\Controllers;
use App\departamentos;
use App\municipios;
use Illuminate\Http\Request;

class selectController extends Controller
{
	public $selectDepartamento= null,$selectMunicipio= null;
	public $departamentos = null,$municipios=null;
    public function render(){

    	return view('modulos.registrar',[
    		'departamentos'=>departamentos::all(),
    		


    	]);

    }

    public function updatedselectmunicipios($departamento_id){

    	$this->municipios=municipios::where('departamento_id',    
    		$departamento_id)->get();

    }
}
