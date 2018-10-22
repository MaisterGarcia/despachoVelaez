<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class abogados extends Model
{
    protected $primaryKey = 'num_folio';  
  	protected $fillable=['NomAbogado','AppAbogado','ApmAbogado','edad','sexo','email','telefono','EstadoCivil','id_est','id_mun','id_TipoAbogado'];
}
