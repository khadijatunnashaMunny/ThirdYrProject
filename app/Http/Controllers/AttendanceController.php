<?php

namespace App\Http\Controllers;
use App\Models\attandance;
use App\Models\leaves;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{
    //
    public function index()
    {
        return view('users.index');
    }
    public function attend(Request $request)
    {
        //
        $attendancemark=true;
        $currentDate=date('Y-m-d');
        $attendance=attandance::where('student_id',auth()->user()->id)->get();
        foreach ($attendance as $at) {
           if($currentDate==date('Y-m-d',strtotime($at->created_at))){
            $attendancemarkMark=false;
            return back()->with('found','Attendance marked already');
            break;
           }       
        }
       if($attendancemark){
       $add=attandance::create([
        'status'=>$request->input('status'),
        'student_id'=>$request->input('student_id'),
        ]);
        return back()->with('success','Attendance marked successfully');    
      }
      else{  
      }
      return back();
    }
    public function attendance(){
        return view('users.requestleave');
    }
    public function myattendance(){
        $shows=attandance::where('student_id',auth()->user()->id)->get();
        return view('users.myattendance')->with('shows',$shows); 
    }
    public function requestleave(Request $request){
        $leaves=leaves::create([
            'student_id'=>$request->input('student_id'),
            'reason'=>$request->input('reason'),
            'status'=>$request->input('status'),
            'from'=>$request->input('from'),
            'to'=>$request->input('to'),
            ]);
            return back();   
    }
    public function myleave( ){
        $leaves=leaves::where('student_id',auth()->user()->id)->get();
        return view('users.myleaves')->with('leaves',$leaves);
    }
    public function registereduser() {
        $users = DB::table('users')->get();
        return view('registereduser')->with('data',$users);
    }

}
