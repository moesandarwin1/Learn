@extends('layouts.admin')
@section('content')

    <div class="container-fluid px-4">
        <div class="my-5">
            <h3 class="my-4 d-inline">Enroll Details</h3>
            <a href="{{route('backend.enrolls')}}" class="btn btn-sm btn-danger float-end">Cancel</a>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <h3 class="text-center">THE BEST</h3>

                <div class="row">
                    <div class="col-md-3 text-dark fw-bold">
                        <p>Course Name:</p>
                        <p>Course Price</p>
                        <p>Date:</p>
                    </div>
                    <div class="col-md-3">
                        <p>{{$enroll->course->name}}</p>
                        <p>{{$enroll->course->price}}</p>
                        <p>{{$enroll->created_at}}</p>
                    </div>
                    <div class="col-md-3 text-dark fw-bold">
                       <p>Payment Name:</p>
                       <p>Status:</p>
                    </div>
                    <div class="col-md-3">
                       <p>{{$enroll->payment->name}} </p>
                       <p>{{$enroll->status}}</p>
                    </div>
                </div>

                
                <div class="row">
                    <div class="offset-md-4 col-md-4">
                        <img src="{{$enroll->payment_slip}}" alt="" class="img-fluid">
                    </div>
                    <form action="{{route('backend.enrolls.status',$enroll->id)}}" class="d-grid gap-2 my-5" method="post">
                    @csrf 
                    @method('put')
                        @if($enroll->status == 'Pending')
                            <input type="hidden" name="status" value="Accept">
                            <button class="btn btn-primary" type="submit">Enroll Accept</button>
                        @else
                            <input type="hidden" name="status" value="Complete">
                            <button class="btn btn-primary" type="submit">Enroll Complete</button>
                        @endif

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection