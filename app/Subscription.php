<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $table = 'course_user';
    protected $primaryKey = 'course_id';
}
