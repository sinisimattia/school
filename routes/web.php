<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\CourseController;
use App\School;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Auth::routes();

Route::get('/home', function(){
    return view('searchschool');
});

Route::get('/home/{school_name}', function($school_name){
    return view('home', [
        "school" => School::where('name', $school_name)->first(),
        "list" => CourseController::list($school_name)
    ]);
})->name('school');

Route::get('/home/{school_name}/course/{course_id}', function($school_name, $course_id){
    return view('home', [
        "school" => School::where('name', $school_name)->first(),
        "list" => CourseController::list($school_name)
    ]);
})->name('course');

Route::middleware('auth')->group(function(){
    Route::prefix('/new')->group(function(){
        Route::get('course', 'PostController@coursePage');
    });

    Route::prefix('/publish')->group(function(){
        Route::post('course', 'CourseController@create');
    });
});
