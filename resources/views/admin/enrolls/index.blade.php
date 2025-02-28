@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
    <div class="my-3">
        <h1 class="mt-4 d-inline">
            @if(Request::is('backend/enrollAccept'))
                EnrollAccept
            @elseif(Request::is('backend/enrollComplete'))
                EnrollComplete
            @else
                Enroll List
            @endif     
        </h1>
        <a href="{{route('backend.enrollAccept')}}" class="btn btn-secondary float-end">EnrollAccept</a>
        <a href="{{route('backend.enrollComplete')}}" class="btn btn-primary float-end mx-3">EnrollComplete</a>
        <a href="{{route('backend.enrolls')}}" class="btn btn-success float-end">Enrolls</a>
    </div>
    
    
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Posts Lists
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Course</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Payment method</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Course</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Payment method</th>
                        <th>#</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach($enroll_data as $enroll)
                    @if($enroll != null)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$enroll->course->name}}</td>
                            <td>{{$enroll->course->price}}</td>
                            <td>
                                <span class="badge 
                                @if($enroll->status == 'Pending')
                                    {{'text-bg-secondary'}}
                                @elseif($enroll->status == 'Accept')
                                    {{'text-bg-primary'}}
                                @else
                                    {{'text-bg-success'}}
                                @endif
                                ">{{$enroll->status}}</span>
                            </td>
                            <td><img src="{{$enroll->payment_slip}}" width="50" alt=""></td>
                            <td><a href="{{route('backend.enrolls.detail',$enroll->id)}}" class="btn btn-sm btn-info">Detail</a></td>
                        </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>






@endsection
