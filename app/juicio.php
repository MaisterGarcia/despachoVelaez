<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class juicio extends Model
{
    protected $primaryKey = 'num_juicio';
 protected $fillable=['num_juicio','NomDemandante','id_TipoJuicio','FechaDemanda','FechaAuditoria','id_cte','num_folio','id_Archivo','FolioJuzgado'];
}
