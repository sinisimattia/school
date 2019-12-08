<?php

namespace App\Http\Controllers;

use App\Subscription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    /**
     * Subscribes the current user to the course with the given ID
     * @param course_id Course ID
     */
    public function subscribe($course_id){
        $user_id = Auth::user()->id;

        if (!Subscription::where('course_id', $course_id)->where('user_id', $user_id)->first()){
            $s = new Subscription();

            $s->user_id = $user_id;
            $s->course_id = $course_id;

            $s->save();
        }

        return back();
    }

    public function unsubscribe($course_id){
        Subscription::where('course_id', $course_id)->where('user_id', Auth::user()->id)->delete();
        
        return back();
    }

    /**
     * @return Array List of subscriptions of the current user
     */
    public static function subscriptions(){
        return Subscription::where('user_id', Auth::user()->id)->get();
    }

    public static function subscribed($course_id){
        $user = Auth::user();
        if ($user)
            return Subscription::where('user_id', $user->id)->where('course_id', $course_id)->first() ? true : false;
        else return false;
    }
}
