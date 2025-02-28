@extends('layouts.front')
@section('content')
<div class="container my-5 py-5">
    <h3 class="text-center py-3">Leaners For Enroll</h3>
    <div class="row">
    @guest
        <a href="/login" class="btn btn-primary">Login</a>
    @else
        <form action="{{route('enrollSuccess', $course->id)}}" id="paymentForm" class="row" method="post" enctype="multipart/form-data">
            @csrf
                <div class="mb-4">
                    <label for="course_id">Course Name</label>
                    <select name="course_id" id="course_id" class="form-select">
                            <option value="{{$course->id}}">{{$course->name}}</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="course_id">Course Price</label>
                    <select name="course_id" id="course_id" class="form-select">
                            <option value="{{$course->id}}">{{$course->price}} MMK</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="payment_id">Payment method</label>
                    <select name="payment_id" id="payment_id" class="form-select">
                        <option>Choose PAyment Method</option>
                        @foreach($payments as $payment)
                            <option value="{{$payment->id}}">{{$payment->name}}/{{$payment->account_number}}/{{$payment->account_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="payment_slip">Payment Slip</label>
                    <input type="file" name="payment_slip" id="payment_slip" class="form-control">
                </div>
                <div class="col-md-12">
                    <label for="note">Note</label>
                    <textarea name="note" id="" class="form-control"></textarea>
                </div>

                <button class="btn btn-success my-3" id="enroll-now" type="submit">Enroll Now</button>
        </form>
    @endif
    </div>

</div>
@endsection