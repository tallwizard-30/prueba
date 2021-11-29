<?php
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $datos  = array([
             'nombre_departamento'=> 'Tolima'],
             ['nombre_departamento'=> 'Cundinamarca'],
             ['nombre_departamento'=> 'Valle'],
             ['nombre_departamento'=> 'Cauca'],
             ['nombre_departamento'=> 'Huila'],);

       $total = count($datos);

       for($i=0;$i<$total;$i++){
   		 DB::table('departamentos')->insert($datos[$i]);
		}
    	
       
        $municipios  = array(['departamento_id'=>'1',
            'nombre_municipio'=> 'Chaparral'],
            ['departamento_id'=>'1',
            'nombre_municipio'=> 'Libano'],
        	['departamento_id'=>'2',
            'nombre_municipio'=> 'Girardot'],
        	['departamento_id'=>'2',
            'nombre_municipio'=> 'Soacha'],
        	['departamento_id'=>'3',
            'nombre_municipio'=> 'Cali'],
        	['departamento_id'=>'3',
            'nombre_municipio'=> 'Palmira'],
        	['departamento_id'=>'4',
            'nombre_municipio'=> 'Popayan'],
        	['departamento_id'=>'4',
            'nombre_municipio'=> 'Caloto'],
            ['departamento_id'=>'5',
            'nombre_municipio'=> 'Neiva'],
        	['departamento_id'=>'5',
            'nombre_municipio'=> 'Tello']);    
             $total2 = count($municipios);

       for($i=0;$i<$total2;$i++){
   		 DB::table('municipios')->insert($municipios[$i]);
		}
             
         DB::table('users')->insert([
        'name'=> 'Jose tenorio',
        'documento'=>'1234567890',
        'password'=>hash::make('1234567890'),

       
         ]);
        
       DB::table('tipos_documento')->insert([
        'nombre'=> 'Cedula',
       
         ]);
       DB::table('tipos_documento')->insert([
       
        'nombre'=>'Tarjeta identidad'
       
         ]);

        DB::table('genero')->insert([
        'nombre'=> 'Masculino',
       
         ]);
       DB::table('genero')->insert([
       
        'nombre'=>'Femenino'
       
         ]);




        $pacientes  = array(['tipo_documento_id'=>'1',
            'numero_documento'=> '119403927','nombre1'=>'juan','nombre2'=>'carlos','apellido1'=>'torres','apellido2'=>'perez','genero_id'=>'1','departamento_id'=>'1','municipio_id'=>'1'],['tipo_documento_id'=>'2',
            'numero_documento'=> '6437234','nombre1'=>'maria','nombre2'=>'isabel','apellido1'=>'gomez','apellido2'=>'zuñiga','genero_id'=>'2','departamento_id'=>'2','municipio_id'=>'3'],
            ['tipo_documento_id'=>'1',
            'numero_documento'=> '219403927','nombre1'=>'felipe','nombre2'=>'','apellido1'=>'campos','apellido2'=>'gonzales','genero_id'=>'1','departamento_id'=>'3','municipio_id'=>'5'],['tipo_documento_id'=>'2',
            'numero_documento'=> '419403927','nombre1'=>'andres','nombre2'=>'felipe','apellido1'=>'gomez','apellido2'=>'martinez','genero_id'=>'1','departamento_id'=>'3','municipio_id'=>'5'],['tipo_documento_id'=>'1',
            'numero_documento'=> '519403927','nombre1'=>'catalina','nombre2'=>'','apellido1'=>'rodriguez','apellido2'=>'torres','genero_id'=>'2','departamento_id'=>'4','municipio_id'=>'8'],
           );    
             $total3 = count($pacientes);

       for($i=0;$i<$total3;$i++){
   		 DB::table('pacientes')->insert($pacientes[$i]);
		}
    }
}
