<?php

namespace App\Http\Controllers;

use App\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public static function get($name){
        return School::where('name', $name)->first();
    }
}
