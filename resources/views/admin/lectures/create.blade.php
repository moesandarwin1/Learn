@extends('layouts.admin')
@section('content')
<form action="{{route('backend.lectures.store', ['course' => $course->id, 'chapter'=>$chapter->id])}}" method="post" enctype="multipart/form-data">
@csrf
    <div class="container-fluid px-4">
        <div class="my-3">
            <h1 class="mt-4 d-inline">New Courses</h1>
            <a href="{{route('backend.courses.index')}}" class="btn btn-primary float-end">Back</a>
        </div>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="">Courses</a></li>
            <li class="breadcrumb-item active"><a href="">Courses Details</a></li>
            <li class="breadcrumb-item active">Add New Lecture</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Posts Lists
            </div>
            <div class="card-body">
                <div class="m-2">
                    <label for="title" class="form-label">Lecture Title</label>
                    <input type="text" name="title" id="title" value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror" placeholder="">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control @error('description')is-invalid @enderror" rows="3" name="description" id="">{{old('description')}}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="video_url" class="form-label">Video Link </label>
                    <input type="text" class="form-control" value="" name="video_url" id="video_url">
                    @error('video_url')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="m-2">
                    <label for="category_id" class="form-label">Category</label>
                    <select name="category_id" id="category_id" class="form-select @error('category_id') is-invalid @enderror">
                        <option selected value="">Choose Category.....</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" {{old('category_id')== $category->id ?'selected':''}}>{{$category->id}}</option>
                        @endforeach
                        
                    </select>
                    @error('category_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror     
                          
                </div>
                <div class="mb-3">
                    <label for="sort_order" class="form-label">Sorting</label>
                    <input type="number" class="form-control " id="sort_order" name="sort_order" value="4" readonly>
                </div>

                <div class="mb-3">
                    <input type="hidden" name="course_id" value="{{ request('course') }}">
                    <input type="hidden" name="chapter_id" value="{{ request('chapter') }}">
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </div>

        </div>
        
    </div>
</form>
@endsection