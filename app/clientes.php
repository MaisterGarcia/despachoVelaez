<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class clientes extends Model
{
	use SoftDeletes;
    protected $primaryKey = 'id_cte';
 protected $fillable=['id_cte','NomCliente','AppCliente','ApmCliente','edad','sexo','email','telefono','EstadoCivil','id_est','id_mun','num_folio','id_TipoArchivo'];

 protected $date=['deleted_at'];
}
