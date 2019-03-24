<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tareas extends Model
{
	use SoftDeletes;
    protected $primaryKey = 'id_Tarea';  
  	protected $fillable=['id_Tarea','num_folio','id_EstTar'];
  	protected $date=['deleted_at'];
}
