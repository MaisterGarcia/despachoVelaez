<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tipo_abogados extends Model
{
	use SoftDeletes;
    protected $primaryKey = 'IdTipoAbogado';  
  	protected $fillable=['IdTipoAbogado','TipoAbogado'];
 	protected $date=['deleted_at'];
}
