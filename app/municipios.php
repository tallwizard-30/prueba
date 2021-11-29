<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class municipios extends Model
{
     protected $table = "municipios";

     protected $fillable = [
        'nombre_municipio', 'departamento_id'
    ];

    public function departamento(){
    	return $this->belongsTo(departamento::class);
    }
}
