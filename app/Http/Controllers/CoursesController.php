<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Lesson;

class CoursesController extends Controller
{
    public function allCourses(){
    	$courses = Course::all(); 
    	$lessons = Lesson::all(); 

    	return view('pages.courses',compact('courses','lessons'));
    }

    public function course($slug)
    {
    	$course = Course::where('slug',$slug)->with('details')->first();
    	dd($course);
    }
}
