<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tareas extends Model
{
    protected $primaryKey = 'id_Tarea';  
  	protected $fillable=['id_Tarea','num_folio','id_EstTar'];
}
