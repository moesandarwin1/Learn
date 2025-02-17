@extends('layouts.admin')
@section('content')
<form action="{{ route('backend.chapters.store', request()->query('course_id') ) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container-fluid px-4">

        <h3 class="my-2 text-primary">THE BEST Admin Dashboard</h3>
        <div class="d-flex align-items-left align-items-md-right flex-column flex-md-row clear-fix my-3">
            <div>
                <h3 class="fw-bold mb-3 foat-md-start">Create New Chapter</h3>
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
                    <li class="breadcrumb-item">Add Chapter</li>
                </ol>
            </nav>
        </div>


        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Posts Lists
            </div>
            <div class="card-body">

                <div class="mb-3">
                    <input type="hidden" name="course_id" value="{{ request()->query('course_id')}}">
                </div>
                
                <div class="m-2">
                    <label for="title" class="form-label">Chapter Title</label>
                    <input type="text" name="title" id="title" value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror" placeholder="">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="m-2">
                    <label for="sort_order" class="form-label">Sorting</label>
                    <input type="text" name="sort_order" id="sort_order" value="{{old('sort_order')}}" class="form-control @error('sort_order') is-invalid @enderror" placeholder="">
                    @error('sort_order')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                
                
               
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>

            </div>
        </div>

    </div>

</form>
@endsection