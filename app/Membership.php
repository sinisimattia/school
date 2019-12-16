<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    protected $table = 'school_user';
    protected $primaryKey = 'user_id';

    public function school(){
        return $this->belongsTo('App\School');
    }
}
