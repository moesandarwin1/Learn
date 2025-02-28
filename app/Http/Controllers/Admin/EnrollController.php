<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enroll;


class EnrollController extends Controller
{
    public function enrolls(){
        $enroll_data = Enroll::where('status','Pending')->get();

        return view('admin.enrolls.index',compact('enroll_data'));
    }

    public function enrollAccept(){
        $enroll_data = Enroll::where('status','Accept')->get();


        return view('admin.enrolls.index',compact('enroll_data'));
        
    }


    public function enrollComplete(){
        
        $enroll_data = Enroll::where('status','Complete')->get();


        return view('admin.enrolls.index',compact('enroll_data'));
        
    }

    public function enrollDetail($id){
        $enroll = Enroll::find($id);
        return view('admin.enrolls.detail',compact('enroll'));
    }

    public function status(Request $request,$id){
        $enroll = Enroll::find($id);
        $enroll->status = $request->status;
        $enroll->save();
        return redirect()->route('backend.enrolls');
    }

    
        
    
}
