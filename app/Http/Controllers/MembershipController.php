<?php

namespace App\Http\Controllers;

use App\Membership;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MembershipController extends Controller
{
    public static function new(Request $request){
        $user_id = Auth::user()->id;
        if ($user_id && $request->school_id){
            $school_id = $request->school_id;

            if (!Membership::find($user_id)){
                $req = new Membership();

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

    /**
     * Under Admin scope only.
     */
    public static function approve(Request $request){
        $user = User::find($request->user_id);

        if ($user){
            $req = Membership::find($user->id); //TODO finish
        }
    }
}
