<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Actor;

class Actor extends Model
{


public $table = 'actors';
public $timestamps = false;
public $guarded = [];
  public function getNombreCompleto()
  {
    return $this->first_name . ' '. $this->last_name;
  }
}
