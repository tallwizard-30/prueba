<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pacientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_documento_id')->unsigned();
             
            
            $table->integer('numero_documento');
            $table->text('nombre1');
            $table->text('nombre2');
            $table->text('apellido1');
            $table->text('apellido2');
           
             $table->integer("genero_id")->unsigned();

       
            $table->integer("departamento_id")->unsigned();
           
            
            $table->integer('municipio_id')->unsigned();

            //llaves foraneas

            $table->foreign("tipo_documento_id")->references("id")->on("tipos_documento")
            ->onDelete("cascade")
            ->onUpdate("cascade");
             $table->foreign("genero_id")->references("id")->on("genero")
            ->onDelete("cascade")
            ->onUpdate("cascade");
             $table->foreign("departamento_id")->references("id")->on("departamentos")
            ->onDelete("cascade")
            ->onUpdate("cascade");
             $table->foreign("municipio_id")->references("id")->on("municipios")
            ->onDelete("cascade")
            ->onUpdate("cascade");
            $table->timestamp('updated_at')->nullable();
           
            

            
            
           
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
