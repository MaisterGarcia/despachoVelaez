<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_juicios extends Model
{
     protected $primaryKey = 'id_TipoJuicio';  
  	protected $fillable=['id_TipoJuicio','NomTipoJuicio'];
}
