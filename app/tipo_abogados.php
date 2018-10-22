<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_abogados extends Model
{
    protected $primaryKey = 'idTipoAbogado';  
  	protected $fillable=['idTipoAbogado','TipoAbogado'];
 
}
