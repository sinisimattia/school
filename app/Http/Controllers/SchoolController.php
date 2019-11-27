<?php

namespace App\Http\Controllers;

use App\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public static function get($name){
        return School::where('name', $name)->first();
    }

    public static function list(){
        return School::all()->take(10);
    }
}
