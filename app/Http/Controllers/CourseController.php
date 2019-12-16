<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;
use App\Course;
use App\User;
use Illuminate\Support\Facades\Auth;
//use SubscriptionController;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public static function create(Request $request){
        if (Auth::user()->can('create', Course::class)){
            $request->validate([
                'title' => 'required'
            ]);

            $course = new Course();

            $course->title = $request->title;
            $course->description = $request->desc;
            $course->content = $request->content;
            $course->user_id = Auth::user()->id;
            $course->school_id = Auth::user()->school_id; //TODO replace with membership ID

            if($course->save()) return redirect()->route('home');
            else return back()->withInput();
        }
        else return view('error', [
            'code' => "",
            'message' => "You are not authorized to create a course"
        ]);
    }

    public static function list(String $school_name){
        $school = School::where('name', $school_name)->first();

        if ($school){
            $list = Course::where('approved', true)->whereHas('user', function($user){
                $user->has('membership');
            })->get();

            foreach ($list as $course){
                $course->subscribed = SubscriptionController::subscribed($course->id);
            }

            return $list;
        }
    }

    public static function get($id){
        $course = Course::find($id);
        $user = Auth::user();
        
        if ($user && $user->can('view', $course)){
            $course->subscribed = SubscriptionController::subscribed($course->id);
            return $course;
        }
        else return view('error', [
            'code' => "",
            'message' => "You are not authorized to view this course"
        ]);
    }

    public static function approve(Request $request){
        $course = Course::find($request->course_id);

        if (Auth::user()->can('approve', $course)){
            $course->approved = true;
            if ($course->save()){
                return redirect('admin');
            }
        }

        return response('Something went wrong', 500);
    }
}
