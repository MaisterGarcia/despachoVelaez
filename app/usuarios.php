<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class usuarios extends Model
{
    use SoftDeletes;
   protected $primaryKey = 'idu';  
   protected $fillable=['idu','nombre','correo','tipo','user','pasw'];
   
   protected $date=['deleted_at'];
}
