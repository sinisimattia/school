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
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::view('about', 'about')->name('about');

Route::prefix('home')->group(function () {
    Route::get('', 'SchoolController@show')->name('home');

    Route::prefix('{school_name}')->group(function ($school_name) {
        Route::get('', function ($school_name) {
            return view('school', [
                'school' => SchoolController::get($school_name),
                'list' => CourseController::list($school_name),
                'user' => UserController::me()
            ]);
        })->name('school');

        Route::get('{course_id}', function ($school_name, $course_id) {
            return view('course', [
                'course' => CourseController::get($course_id),
                'school' => SchoolController::get($school_name)
            ]);
        })->name('course');
    });
});

Route::get('search', 'SearchController@schools')->name('search schools');

Route::middleware('auth')->group(function () {
    Route::prefix('new')->group(function () {
        Route::get('course', function () {
            return view('post');
        })->name('new course');
    });

    Route::prefix('my')->group(function(){
        Route::redirect('', 'profile');

        Route::get('profile', function(){
            return view('user.dashboard', [
                'user' => UserController::me()
            ]);
        })->name('my profile');

        Route::get('subscriptions', function(){
            $user = UserController::me();
            return view('user.subscriptions', [
                'user' => $user,
                'courses' => UserController::subscriptions()
            ]);
        });
    });

    Route::get('subscribe/{course_id}', 'SubscriptionController@subscribe');
    Route::get('unsubscribe/{course_id}', 'SubscriptionController@unsubscribe');

    Route::prefix('publish')->group(function () {
        Route::post('course', 'CourseController@create')->name('publish course');
    });
});
