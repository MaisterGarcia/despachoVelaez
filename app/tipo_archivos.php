<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tipo_archivos extends Model
{
	use SoftDeletes;
  	protected $primaryKey = 'id_TipoArchivo';
 protected $fillable=['id_TipoArchivo','nombre','activo'];
 protected $date=['deleted_at'];
}
