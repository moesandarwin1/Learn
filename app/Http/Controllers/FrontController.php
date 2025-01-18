<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class Frontcontroller extends Controller
{
    public function index(){

        return view('front.index');
    }

    public function about(){

        return view('front.about');
    }

    public function courses(){
        $courses = Course::orderBy('id','DESC')->paginate(3);
        return view('front.courses',compact('courses'));
    }
    
    public function contact(){
        return view('front.contact');
    }

    public function coursedetails($id){
        $course = Course::find($id);

        return view('front.coursedetails',compact('course'));
    }




}
