@extends('layouts.admin')
@section('content')
<form action="{{ route('backend.lectures.update', ['course' => $course->id, 'lecture' => $lecture->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="container-fluid px-4">

        <h3 class="my-2 text-primary">THE BEST Admin Dashboard</h3>
        <div class="d-flex align-items-left align-items-md-right flex-column flex-md-row clear-fix my-3">
            <div>
                <h3 class="fw-bold mb-3 foat-md-start">Edit Lecture</h3>
            </div>
            <div class="ms-md-auto py-2 py-md-0 float-md-end">
            @if(isset($course))
                <a href="" class="btn btn-danger btn-round d-inline d-md-inline btn-md"><i class="fas fa-solid fa-arrow-left me-2"></i>Back</a>
            @endif
            </div>
        </div>
        <div class="pb-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('backend.dashboard')}}">Dashoboard</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('backend.courses.index')}}">Course</a></li>
                    <li class="breadcrumb-item"><a href="">Course Detial</a></li>
                    <li class="breadcrumb-item">Edit Lecture</li>
                </ol>
            </nav>
        </div>


        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Posts Lists
            </div>
            <div class="card-body">
                
                <div class="m-2">
                    <label for="title" class="form-label">Lecture Title</label>
                    <input type="text" name="title" id="title" value="{{$lecture->title}}" class="form-control @error('title') is-invalid @enderror" placeholder="">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('description')is-invalid @enderror" rows="3" name="description" id="">{{$lecture->description}}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="video_url" class="form-label">Video Link <span class="text-danger">*</span></label>
                    <input type="text" class="form-control "
                        placeholder="Enter Youtube Link" name="video_url" id="video_url"
                        value="https://www.youtube.com/watch?v=0Wc7M2AcJ3w&amp;list=RD0Wc7M2AcJ3w&amp;start_radio=1">
                </div>

                <div class="m-2">
                    <label for="sort_order" class="form-label">Sorting</label>
                    <input type="text" name="sort_order" id="sort_order" value="{{$lecture->sort_order}}" class="form-control @error('sort_order') is-invalid @enderror" placeholder="">
                    @error('sort_order')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <input type="hidden" name="course_id" value="{{$lecture->course_id}}">
                    <input type="hidden" name="chapter_id" value="{{$lecture->chapter_id}}">
                </div>
                
               
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>

            </div>
        </div>

    </div>

</form>
@endsection