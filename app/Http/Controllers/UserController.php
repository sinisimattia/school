<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public static function me(){
        return Auth::user();
    }

    public static function subscriptions($user_id = null){
        if (!$user_id){
            $user = Auth::user();
            if ($user)
                $user_id = $user->id;
        }            
        
        $list = User::find($user_id)->subscriptions;

        foreach ($list as $course){
            $course->subscribed = SubscriptionController::subscribed($course->id);
        }

        return $list;
    }

    public static function get($username){
        return User::where('username', $username)->first();
    }
}
