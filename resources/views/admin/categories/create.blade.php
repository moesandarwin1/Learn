@extends('layouts.admin')
@section('content')
<form action="{{route('backend.categories.store')}}" method="post" enctype="multipart/form-data">
@csrf
    <div class="container-fluid px-4">
        <div class="my-3">
            <h1 class="mt-4 d-inline">Create Category</h1>
            <a href="{{route('backend.categories.index')}}" class="btn btn-primary float-end">Back</a>
        </div>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="">Categories</a></li>
            <li class="breadcrumb-item active">Categories Create</li>
        </ol>
        
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Posts Lists
            </div>
            <div class="card-body">
                <div class="m-2">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" value="{{old('name')}}" class="form-control @error ('name') is-invalid @enderror" placeholder="">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
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