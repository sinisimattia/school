<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function author(){
        return $this->belongsTo('App\User');
    }
}
