<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Chapter;
use App\Http\Requests\ChapterRequest;
use App\Http\Requests\ChapterUpdateRequest;



class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

         
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    //$courses = Course::all();
    return view('admin.chapters.create');
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(ChapterRequest $request,Course $course)
    {
        //dd($request);
        //dd($request);
        $chapters = Chapter::create($request->all());
        $chapters->save();

        return redirect()->route('backend.courses.show', ['course' => $course->id]);
    }

    /**
     * Display the specified resource.
    */
    public function show(string $id)
    {
        $course = Course::find($id);
       return view('admin.courses.detail',compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $chapter = Chapter::find($id);
        $courses = Course::all();
        return view('admin.chapters.edit', compact('chapter','courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ChapterUpdateRequest $request, string $id)
    {
        $chapter = Chapter::find($id);
        $chapter->update($request->all());
        $chapter->save();
        return redirect()->route('backend.courses.show',$request->course_id );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $chapter = Chapter::find($id);
        $course_id = $chapter->course_id;
        $chapter->delete();
        return redirect()->route('backend.courses.show',$course_id) ;
    }
}
