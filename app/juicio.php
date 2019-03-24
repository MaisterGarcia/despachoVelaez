<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class juicio extends Model
{
	use SoftDeletes;
    protected $primaryKey = 'num_juicio';
 protected $fillable=['num_juicio','NomDemandante','id_TipoJuicio','FechaDemanda','FechaAuditoria','id_cte','num_folio','id_TipoArchivo','FolioJuzgado','archivo'];
 protected $date=['deleted_at'];
}
