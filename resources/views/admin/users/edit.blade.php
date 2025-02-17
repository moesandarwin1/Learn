@extends('layouts.admin')
@section('content')
<form action="{{route('backend.users.update',$user->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="container-fluid px-4">
        <div class="my-3">
            <h1 class="mt-4 d-inline">Edit Users</h1>
            <a href="{{route('backend.users.index')}}" class="btn btn-primary float-end">Cancel</a>
        </div>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="">Users</a></li>
            <li class="breadcrumb-item active">Edit User</li>
        </ol>
        
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                User Lists
            </div>
            <div class="card-body">
                <div class="m-2">
                    <label for="name" class="form-label">User Name</label>
                    <input type="text" name="name" value="{{$user->name}}" class="form-control @error('name') is-invalid @enderror" placeholder="">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="m-2">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" id="phone" value="{{$user->phone}}" class="form-control @error('phone') is-invalid @enderror" placeholder="">
                    @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" id="address" value="{{$user->address}}" class="form-control @error('address') is-invalid @enderror" placeholder="">
                    @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="m-2">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" value="{{$user->email}}" class="form-control @error('email') is-invalid @enderror" placeholder="">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="m-2">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" name="password" value="{{$user->password}}" class="form-control @error('password') is-invalid @enderror" placeholder="">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="m-2">
                    <label for="role" class="form-label">Role</label>
                    <select name="role" id="" class="form-select @error('role') is-invalid @enderror">
                        <option value="admin" {{$user->role == 'admin' ? 'selected' : ''}}>Admin</option>
                        <option value="user" {{$user->role == 'user' ? 'selected' : ''}}>User</option>
                        <option value="super_admin" {{$user->role == 'super_admin' ? 'selected' : ''}}>Super Admin</option>
                        
                    </select>   
                    @error('role')
                        <div class="invalid-feedback">{{ $message }}</div> 
                    @enderror
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection