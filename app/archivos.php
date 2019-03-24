<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class archivos extends Model
{
    protected $primaryKey = 'id_Archivo';
 protected $fillable=['id_Archivo','NomArchivo','FechaCreacion','FechaVencimiento','Version','id_TipoArchivo','URL','activo'];
}
