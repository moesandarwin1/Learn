@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
    <h3 class="my-2 text-primary">THE BEST Admin Dashboard</h3>
    <div class="my-3">  
        <h1 class="mt-4 d-inline">Courses </h1>
        <a href="{{route('backend.courses.create')}}" class="btn btn-primary float-end">+Add Course</a>
    </div>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Course</li>
    </ol>
    <div class="row">
        @foreach($courses as $course)
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <img src="{{$course->image}}" class="card-img-top" alt="">
                <div class="card-body text-center">
                    <h5 class="card-title" style="color:#173282;">{{$course->name}}</h5>
                    <p class="fw-light fst-italic">{{$course->category_id}}</p>
                    <h4 class="text-primary">*** {{$course->price}} Ks ***</h4>
                    <p class="text-body-secondary fst-italic" style="font-size:13px">
                            <span class="pe-5 custom"><i class="fas fa-newspaper text-primary me-2" style="font-size:11px"></i> 2 Chapters</span>
                            <span class="ps-3 custom"><i class="fas fa-video me-2 text-primary" style="font-size:11px"></i>6 Lectures</span>
                    </p>
                    <a href="{{route('backend.courses.show', ['course' => $course->id])}}" class="btn btn-outline-primary btn-sm me-2 mb-3"><i class="fas fa-eye me-2"></i>Detail</a>
                    <a href="{{route('backend.courses.edit', $course->id)}}" class="btn btn-outline-warning btn-sm me-2 mb-3"><i class="fas fa-pen me-2"></i>Edit</a>
                    <button type="button" class="btn btn-outline-danger btn-sm mb-3 delete"  data-id="{{$course->id}}"><i class="fas fa-solid fa-trash me-2"></i>Delete</button>
                </div>
            </div>
        </div>
        @endforeach

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
            $('#deleteForm').attr('action',`courses/${id}`);
            $('#deleteModal').modal('show');
            
        })
    })
</script>
@endsection