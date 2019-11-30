<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;
use App\Course;
use Illuminate\Support\Facades\Auth;

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
            $course->author_id = Auth::user()->id;
            $course->school_id = Auth::user()->school_id;

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

        if ($school)
           return Course::where('school_id', $school->id)->get();
    }

    public static function get($id){
        return Course::find($id);
    }
}
