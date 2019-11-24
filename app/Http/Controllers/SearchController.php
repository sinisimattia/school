<?php

namespace App\Http\Controllers;

use App\School;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function schools(Request $request){
        $results = School::where('fullname', 'LIKE', '%'.$request->school.'%')->get();

        return view('schools', ["list" => $results]);
    }
}
