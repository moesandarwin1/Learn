<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lecture;
use App\Models\Category;
use App\Models\Course;
use App\Models\Chapter;
use App\Http\Requests\LectureRequest;
use App\Http\Requests\LectureUpdateRequest;






class LectureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lectures = Lecture::orderBy('id','DESC')->paginate(15);
        return view('admin.lectures.index',compact('lectures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Course $course, Chapter $chapter)
    {
        
        
        if ($chapter->course_id !== $course->id) {
            abort(404);
        }
        $categories = Category::all();
        return view('admin.lectures.create', compact('course','chapter','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LectureRequest $request,Course $course, Chapter $chapter)
    {
        //dd($request->course_id);
        //dd($request->all());
        //var_dump($request);
        $lecture = Lecture::create($request->all());

        $lecture->save();
        return redirect()->route('backend.courses.show', $request->course_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $lecture = Lecture::find($id);
        return view('admin.lectures.detail',compact('lecture'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $lecture = Lecture::find($id);
        $course = Course::find($id);
        return view ('admin.lectures.edit',compact('lecture','course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LectureUpdateRequest $request, string $id)
    {
        //dd($request);
       $lecture = Lecture::find($id);
        $lecture->update($request->all());
        $lecture->save();
        return redirect()->route('backend.courses.show',$request->course_id );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //dd($id);
        $lecture = Lecture::find($id);
        $course_id = $lecture->course_id;
        $lecture->delete();
        return redirect()->route('backend.courses.show',$course_id) ;
    }
}
