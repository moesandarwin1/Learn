<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;
use App\Models\Lecture;
use App\Http\Requests\CourseRequest;
use App\Http\Requests\CourseUpdateRequest;




class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::orderBY('id','DESC')->paginate(15);

        return view('admin.courses.index',compact('courses'));
    }
    
   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.courses.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseRequest $request)
    {
        //dd($request);
        $courses = Course::create($request->all());

        $file_name = time().'.'.$request->image->extension();
        $upload = $request->image->move(public_path('images/courses/'),$file_name);
        if($upload){
            $courses->image = "/images/courses/".$file_name;
        }

        $courses->save();
        return redirect()->route('backend.courses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = Course::find($id);
        $lectures = Lecture::all();
        
        return view('admin.courses.detail',compact('course','lectures'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Course::find($id);
        $categories = Category::all();
        return view('admin.courses.edit',compact('course','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CourseUpdateRequest $request, string $id)
    {
        //dd($request);
        $course = Course::find($id);
        $course->update($request->all());

        if($request->hasFile('image')){
            $file_name = time().'.'.$request->image->extension();
            $upload = $request->image->move(public_path('images/courses/'),$file_name);
            
            if($upload){
                $course->image = "/images/courses/".$file_name;
            }
        }else {
            $course->image = $request->old_image;
        }
        $course->save();
        return redirect()->route('backend.courses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect()->route('backend.courses.index');
    }
}
