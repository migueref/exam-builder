<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
  public function answers()
  {
      return $this->hasMany('App\Answer');
  }
}
