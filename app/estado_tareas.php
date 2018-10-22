<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estado_tareas extends Model
{
    protected $primaryKey = 'id_EstTar';  
  	protected $fillable=['id_EstTar','EstadoTarea'];
}
