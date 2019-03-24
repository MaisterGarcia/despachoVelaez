<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tipo_juzgados extends Model
{
	use SoftDeletes;
    protected $primaryKey = 'id_TipoJuzgado';
 protected $fillable=['id_TipoJuzgado','TipoJuzgado'];
 protected $date=['deleted_at'];
}

