@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
    <h3 class="my-2 text-primary">THE BEST Admin Dashboard</h3>
    <div class="my-3">  
        <h1 class="mt-4 d-inline">Categories </h1>
        <a href="{{route('backend.categories.create')}}" class="btn btn-primary float-end">+Add Category</a>
    </div>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Category</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Course Categories
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$category->name}}</td>
                            <td>
                                <a href="{{route('backend.categories.edit',$category->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                <button type="button" class="btn btn-sm btn-danger delete" data-id="{{$category->id}}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                
            </table>
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
        $('tbody').on('click','.delete',function(){
            //alert('hello');
            let id = $(this).data('id');
            //console.log(id);
            $('#deleteForm').attr('action',`categories/${id}`);
            $('#deleteModal').modal('show');
            
        })
    })
</script>
@endsection