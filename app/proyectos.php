<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proyectos extends Model
{
    protected $table = "pacientes";

    protected $fillable = [
        'tipo_documento_id', 'numero_documento', 'nombre1','nombre2','apellido1','apellido2','genero_id','departamento_id','municipio_id'
    ];
}
