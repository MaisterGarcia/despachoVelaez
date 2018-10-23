<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class juzgados extends Model
{
    protected $primaryKey = 'FolioJuzgado';
 protected $fillable=['FolioJuzgado','Pais','No_Juzgado','id_TipoJuzgado','Localizacion'];
}
