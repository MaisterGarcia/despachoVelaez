<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tipo_juicios extends Model
{
	use SoftDeletes;
	protected $primaryKey = 'id_TipoJuicio';  
	protected $fillable=['id_TipoJuicio','NomTipoJuicio'];
	protected $date=['deleted_at'];
}
