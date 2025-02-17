@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
<h3 class="my-2 text-primary">THE BEST Admin Dashboard</h3>
    <div class="my-3">  
        <h1 class="mt-4 d-inline">Lectures </h1>
    </div>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Lectures</li>
    </ol>
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row mb-3">
        <div class="ms-md-auto py-2 py-md-0">

            <form method="GET" action="" id="courseFilterForm">
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="course" class="col-form-label">To Filter Choose Course:</label>
                    </div>
                    <div class="col-auto">
                        <select class="form-select" name="course_id" id="courseSelect">
                            <option value="Selected Course">Selected Course</option>
                            <option value="1" >basic</option>
                            <option value="2" >Advanced</option>
                            <option value="3" >Intermidated</option>
                            <option value="4" >Grammer</option>
                            <option value="5" >Course 1</option>
                            <option value="6" >Advances Course 1</option>
                            <option value="7" >New Course</option>
                            <option value="8" >testing</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        @foreach($lectures as $lecture)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                         <iframe width="400" height="300" src="https://www.youtube.com/embed/Il-an3K9pjg" title="Anne-Marie - 2002 [Official Video]" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <div class="card-body text-center">
                        <h5 class="card-title my-2" style="color:#173282;">{{$lecture->title}}</h5>
                            <h5 class="d-block st-italic text-black-50">
                                <i class="fas fa-list me-2"></i>{{$lecture->category_id}}
                            </h5>
                            <span class="d-block st-italic text-black-50">
                                <i class="fas fa-book-open"></i> basic
                            </span>
                            <span class="d-block fw-light fst-italic text-primary my-2">
                                {{$lecture->chapter_id}}
                            </span>
                            <span class="d-block st-italic text-black-50">
                            [ <i class="fas fa-clock text-primary me-2"></i>
                            00:03:42 ]
                        </span>
                        <p class="mt-3 mb-0">
                            <a href="{{route('backend.lectures.show', $lecture->id)}}" class="btn btn-primary rounded-2 me-2 mb-3 w-50">
                                <i class="fas fa-eye me-2"></i>Detail
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection