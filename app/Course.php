<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function subscribers(){
        return $this->belongsToMany('App\User');
    }
}
