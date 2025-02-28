@extends('layouts.front')
@section('content')
    <div class="text-center my-5 py-5">
        <h1 class="">THANK YOU For your Payment!</h1>
        <p class="h3">Verify Your Email Address</p>
        <p>Before proceeding, please check your email for a verification link. If you did not receive the email,</p>
        <a href="{{route('mydashboard',$course->id)}}" class="btn btn-primay border bg-primary">start-></a>
    </di>
@endsection