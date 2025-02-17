@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
    <h3 class="my-2 text-primary">THE BEST Admin Dashboard</h3>
    <div class="d-flex align-items-left align-items-md-right flex-column flex-md-row clear-fix my-3">
          <div>
            <h3 class="fw-bold mb-3 foat-md-start">Lectures Detial Informatin</h3>
          </div>
          <div class="ms-md-auto py-2 py-md-0 float-md-end">
            <a href="{{route('backend.lectures.index')}}" class="btn btn-danger btn-round d-inline d-md-inline btn-md"><i class="fas fa-solid fa-arrow-left me-2"></i>Back</a>
          </div>
    </div>
    <div class="pb-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('backend.dashboard')}}">Dashoboard</a></li>
                <li class="breadcrumb-item active"><a href="{{route('backend.courses.index')}}">Lecture</a></li>
                <li class="breadcrumb-item">Lecture Detial Information</li>
            </ol>
        </nav>
    </div>
    <div class="card">
        <iframe width="100%" height="500" src="https://www.youtube.com/embed/Il-an3K9pjg" title="Anne-Marie - 2002 [Official Video]" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        <div class="card-body">
            <p>
            <h5 class="card-title text-primary d-md-inline me-0 me-md-5">{{$lecture->title}}</h5>
            <span class="d-block st-italic text-black-50">
                [ <i class="fas fa-clock text-primary me-2"></i> 00:03:42 ]
            </span>
            </p>
            <p class="my-3">
                <span class="st-italic text-black-50 d-block d-md-inline"><i
                        class="fas fa-list text-black-80 me-2"></i>category1</span>
                <span class="st-italic text-black-50  d-block d-md-inline ms-0 ms-md-5 my-3"><i
                        class="fas fa-book-open text-black-80 me-2"></i>basic</span>
                <span class="st-italic text-black-50  d-block d-md-inline ms-0 ms-md-5 my-3"><i
                        class="fas fa-regular fa-book text-black-80 me-2"></i>Chapter One</span>
            </p>
            <hr class="my-4">
            <h5 class="fw-bold text-primary">Lecture Description</h5>
            <p>{{$lecture->description}}</p>
        </div>
    </div>
</div>

@endsection