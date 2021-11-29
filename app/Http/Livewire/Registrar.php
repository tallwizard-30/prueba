<?php

namespace App\Http\Livewire;
use App\departamentos;
use App\municipios;
use Livewire\Component;

class Registrar extends Component
{
   public $municipios= '';
    public function render(){

    	return view('Livewire.registrar',[
    		'departamentos'=>departamentos::all(),
    		'municipios'=> $this->municipios


    	]);

    }

    public function listarMunicipios($id){

    	$this->municipios=municipios::where('departamento_id',    
    		$id)->get();

    }
}
