<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class juicios_nuevos extends Model
{
    use SoftDeletes;
    protected $primaryKey = 'num_juicio';
    protected $fillable=['num_juicio','fechaPres','NomDemandante','Dema1','Dema2',
                        'Dema3','TipoFecha','fechaCeleb','FechaIni','FechaFin','id_TipoJuicio','num_folio',
                        'num_folio2','num_folio3'];
    protected $date=['deleted_at'];
}
