@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
    <h3 class="my-2 text-primary">THE BEST Admin Dashboard</h3>
    <div class="d-flex align-items-left align-items-md-right flex-column flex-md-row clear-fix my-3">
          <div>
            <h3 class="fw-bold mb-3 foat-md-start">Course Detial</h3>
          </div>
          <div class="ms-md-auto py-2 py-md-0 float-md-end">
            <a  href="{{ route('backend.chapters.create', ['course_id'=>$course->id]) }}" class="btn btn-primary btn-round d-inline d-md-inline btn-md"><i class="fas fa-solid fa-plus me-2"></i>Add Chapter</a>
            <a href="{{route('backend.courses.index')}}" class="btn btn-danger btn-round d-inline d-md-inline btn-md"><i class="fas fa-solid fa-arrow-left me-2"></i>Back</a>
          </div>
    </div>
    <div class="pb-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('backend.dashboard')}}">Dashoboard</a></li>
                <li class="breadcrumb-item active"><a href="{{route('backend.courses.index')}}">Course</a></li>
                <li class="breadcrumb-item">Course Detial</li>
            </ol>
        </nav>
    </div>

    <div class="row">


        <div class="col-12 col-md-4">
            <div class="card">
                <img src="{{$course->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="fw-bold my-0" style="color:#173282;">{{$course->name}}</h4>
                    <span class="fw-light fst-italic text-dark-50 my-0 d-block">{{$course->category_id}}</span>
                    <h4 class="text-primary my-2">*** {{$course->price}} Ks ***</h4>
                    <p class="text-body-secondary">
                        <span class="fst-italic me-5"><i class="fas fa-newspaper text-primary me-2" style="font-size:11px"></i> 2 Chapters</span>
                        <span class="fst-italic"><i class="fas fa-video me-2 text-primary" style="font-size:11px"></i>6 Lectures</span>
                    </p>
                    <hr>
                    <p class="card-text"><h6>Course Description</h6>{{$course->description}}</p>
                    <a href="{{route('backend.courses.edit', $course->id)}}" class="btn btn-warning rounded-3 w-100 float-end mb-4">Edit Course<i class="fas fa-solid fa-pen ms-2"></i></a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-8" id="delete_Method">
            <div class="card">
                <div class="card-body">
                    <h3 class="py-2 px-2" style="color:#173282;">Chapters</h3>
                    <div class="accordion" id="accordionExample">
                    @foreach($course->chapters->sortBy('sort_order') as $chapter)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-1">
                                <div class="container-fluid row d-flex align-items-center h-100">
                                    <div class="col-12 col-md-6 py-0 px-0">
                                        <h6 class="fw-bold text-primary ps-3 py-3">
                                            <span class="fw-bold bg-primary bg-gradient rounded-circle text-white px-2 py-1 me-3"> {{$chapter->sort_order}} </span>{{$chapter->title}}
                                        </h6>
                                    </div>
                                    <div class="col-10 col-md-5">
                                        <p class="float-md-end mt-2">
                                            <a href="{{route('backend.chapters.edit', $chapter->id)}}" class="btn btn-outline-warning rounded-3 btn-sm py-1 me-2" title="Edit Chapter">
                                                <i class="fas fa-solid fa-pen me-2"></i>Edit
                                            </a>
                                            <button type="button" class="btn btn-outline-danger btn-sm rounded-3 py-1 px-2 delete" data-id="{{$chapter->id}}"><i class="fas fa-trash"></i></button>
                                        </p>
                                    </div>
                                    <div class="col-2 col-md-1">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                        </button>
                                    </div>
                                </div>
                            </h2>

                            <div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="heading-1" data-bs-parent="#accordionExample">
                                <div class="accordion-body bg-info-subtle">
                                    <div class="row row-cols-1 px-3 py-3 g-2">
                                        <!-- Add New Lecture Button -->
                                        <div class="col mb-3">
                                            <div class="row">
                                                <div class="col-12 col-md-8">
                                                    <h3 class="">Lectures</h3>
                                                </div>
                                                <div class="col-12 col-md-4 text-md-end">
                                                    <a  href="{{route('backend.lectures.create', ['course' => $course->id, 'chapter'=>$chapter->id])}}"  class="btn btn-primary btn-round d-md-inline btn-md"><i class="fas fa-solid fa-plus me-2"></i>Add Lecture</a>
                                                </div>
                                            </div>
                                        </div>
                    

                                         <!-- Lecture Items -->
                                        <div class="col rounded-3 bg-white py-3 my-2">
                                            <div class="row">
                                            @foreach($lectures as $lecture)
                                                <div class="col-12 col-md-8">
                                                    <h6 class="me-4 mb-3 mb-md-0">
                                                        <span class="fw-bold bg-dark bg-gradient rounded-circle text-white px-2 py-1 me-3"> {{$lecture->id}}</span>
                                                        {{$lecture->title}}
                                                    </h6>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <span class="float-md-end">
                                                        <a href="{{route('backend.lectures.show', $lecture->id)}}" class="py-1 px-2 btn btn-outline-primary btn-sm" title="View Lecture">
                                                            <i class="fas fa-solid fa-eye"></i>
                                                        </a>
                                                        <a href="{{ route('backend.lectures.edit', ['course' => $course->id, 'lecture' => $lecture->id]) }}" class="py-1 px-2 btn btn-outline-warning  btn-sm mx-2" title="Edit Lecture ">
                                                            <i class="fas fa-solid fa-pen"></i>
                                                        </a>
                                                        <!-- Delete Button for Lecture -->
                                                        <button type="button" class="btn btn-outline-danger btn-sm rounded-3 py-1 px-2 lecture-delete"
                                                        data-id="{{$lecture->id}}"
                                                        data-type="lecture">
                                                        <i class="fas fa-trash"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            @endforeach
                                            </div>
                                        </div>
                                        
                    



                                    </div>
                                </div>      
                            </div>



                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger text-light">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal Delete</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h3>Are you sure delete?</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <form action="" id="deleteForm" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-primary btn-danger">Yes</button>
        </form>
        
      </div>
    </div>
  </div>
</div>
@endsection 

@section('script')
    <script>
        $(document).ready(function(){
            $(this).on('click','.delete',function(){
                //alert('hello');
                let id = $(this).data('id');
                //console.log(id);
                $('#deleteForm').attr('action',`/backend/chapters/${id}`);
                $('#deleteModal').modal('show');

            })
            $(this).on('click','.lecture-delete',function(){
                //alert('hello');
                let id = $(this).data('id');
                //console.log(id);
                $('#deleteForm').attr('action',`/backend/lectures/${id}`);
                $('#deleteModal').modal('show');
                
            })
        })
    </script>
@endsection