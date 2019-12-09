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
        $user = Auth::user();
        if ($user)
            if ( Subscription::where('course_id', $course_id)->where('user_id', $user->id)->delete() )
                return back();
            else return view('error', [
                'code' => 500,
                'message' => 'Failed to unsubscribe.'
            ]);
    }

    /**
     * @return Array List of subscriptions of the current user
     */
    public static function subscriptions(){
        $user = Auth::user();
        if ($user)
            return Subscription::where('user_id', $user->id)->get();
    }

    /**
     * Checks if the current user is subscribed to the given course
     * @param course_id The ID of the course you want to check
     * @return Boolean Wether or not the user is subscribed to the given course
     */
    public static function subscribed($course_id){
        $user = Auth::user();
        if ($user)
            return Subscription::where('user_id', $user->id)->where('course_id', $course_id)->first() ? true : false;
        else return false;
    }
}
