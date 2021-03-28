<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Lesson;

class CoursesController extends Controller
{
    public function allCourses(){
    	$courses = Course::all(); 
    	$lessons = Lesson::paginate(6); 

    	return view('pages.courses',compact('courses','lessons'));
    }

    public function course($slug)
    {
    	$course = Course::where('slug',$slug)->with('details','lessons')->first();
    	// $lessons = Lesson::all();
    	return view('pages.in_course',compact('course'));
    }
    public function lesson($course,$id)
    {
    	$course = $course = Course::where('slug',$course)->with('details','lessons')->first();
    	$lesson = $course->lessons()->where('id',$id)->first();
    	return view('pages.in_lesson',compact('lesson','course'));
    	// dd($lesson);
    }
}
