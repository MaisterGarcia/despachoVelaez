<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_archivos extends Model
{
    protected $primaryKey = 'id_TipoArchivo';  
  	protected $fillable=['id_TipoArchivo','NomArchivo'];
}
