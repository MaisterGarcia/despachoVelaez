<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class juzgados extends Model
{
	use SoftDeletes;
	
    protected $primaryKey = 'FolioJuzgado';
    protected $cast = ['FolioJuzgado'=>'string'];
    public $incrementing = false;
 protected $fillable=['FolioJuzgado','Pais','No_Juzgado','id_TipoJuzgado','Localizacion'];

 protected $date=['deleted_at'];
}
