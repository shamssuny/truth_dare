<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = ['uid','answered'];

    public function answers(){
      return $this->hasOne(Answer::class);
    }
}
