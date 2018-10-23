<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_juzgados extends Model
{
    protected $primaryKey = 'id_TipoJuzgado';
 protected $fillable=['id_TipoJuzgado','TipoJuzgado'];
}
