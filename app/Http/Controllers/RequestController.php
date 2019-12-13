<?php

namespace App\Http\Controllers;

use App\Request as Req;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    public static function new(Request $request){
        $user_id = Auth::user()->id;
        if ($user_id && $request->school_id){
            $school_id = $request->school_id;

            if (!Req::find($user_id)){
                $req = new Req();

                $req->school_id = $school_id;
                $req->user_id  = $user_id;

                if ($req->save())
                    return back();
                else http_response_code(500);
            }
            else return back();
        }
        else http_response_code(500);
    }
}
