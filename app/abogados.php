<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class abogados extends Model
{
    protected $primaryKey = 'num_folio';
 	protected $fillable=['num_folio','NomAbogado','AppAbogado','ApmAbogado','edad','sexo','email','telefono','EstadoCivil','activo','id_est','id_mun','IdTipoAbogado'];
}
