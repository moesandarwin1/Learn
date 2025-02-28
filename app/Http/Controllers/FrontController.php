<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Payment;
use App\Models\Enroll;
use App\Models\Chapter;
use App\Models\Lecture;





class Frontcontroller extends Controller
{
    public function index(){

        $courses = Course::orderBy('id','DESC')->paginate(3);

        return view('front.index',compact('courses'));
    }

    public function about(){

        return view('front.about');
    }

    public function courses(){
        $courses = Course::orderBy('id','DESC')->paginate(3);
        //dd($courses);
        return view('front.courses',compact('courses'));
    }
    
    public function contact(){
        return view('front.contact');
    }

    public function coursedetails($id){
        $course = Course::find($id);

        return view('front.coursedetails',compact('course'));
    }

    public function joins(Request $request,$id){
        //dd($id);
        $payments = Payment::all();
        $course = Course::find($id);
;        return view('front.joins',compact('payments','course'));
    }

    public function enrollSuccess(Request $request, $id){
        //dd($id);
        //dd($request->all());
        $course = Course::find($id);

        $file_name = time().'.'.$request->payment_slip->extension();
        $upload = $request->payment_slip->move(public_path('images/enrolls/'),$file_name);
        $payment_slip = "/images/enrolls/".$file_name;

        $enrolls = Enroll::create([

           
            'note' => $request->note,
            'payment_slip' => $payment_slip,
            'status' => 'Pending',
            'course_id' => $id,
            'payment_id' => $request->payment_id,
            'user_id'=> auth()->user()->id,

            


        ]);

        $enrolls->save();



        return view('front.enrollSuccess',compact('enrolls','course'));

    }


    public function mydashboard($id){

        $course = Course::find($id);
        $chapters = Chapter::all();
        $lectures = Lecture::all();

        return view('front.mydashboard',compact('course','chapters','lectures'));
    }

    public function videolesson($id){

        $course = Course::find($id);
        $lectures = Lecture::all();


        return view('front.videolesson',compact('course','lectures'));
    }




}
