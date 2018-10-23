<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $primaryKey = 'id_cte';
 protected $fillable=['id_cte','NomCliente','AppCliente','ApmCliente','edad','sexo','email','telefono','EstadoCivil','id_est','id_mun','num_folio','id_TipoArchivo'];
}
