<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class abogados extends Model
{
	use SoftDeletes;

    protected $primaryKey = 'num_folio';
 	protected $fillable=['num_folio','NomAbogado','AppAbogado','ApmAbogado','edad','sexo','email','telefono','					EstadoCivil','id_est','id_mun','IdTipoAbogado','Archivo'];
 	  public $incrementing = false;

 	protected $date=['deleted_at'];
}
