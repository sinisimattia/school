<?php

namespace App\Http\Controllers;

use App\School;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function schools(Request $request){
        $results = School::where('fullname', 'LIKE', '%'.strtolower($request->search).'%')->get();

        return view('results', [
            'search' => $request->search,
            'list' => $results
        ]);
    }
}
