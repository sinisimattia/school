<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $table = 'school_user';
    protected $primaryKey = 'user_id';
}
