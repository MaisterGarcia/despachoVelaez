<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class submaterias extends Model
{
    protected $primaryKey = 'id_Submateria';  
  	protected $fillable=['id_Submateria','NomSubmateria','num_juicio'];
}

