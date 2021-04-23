<?php

namespace App\Http\Controllers\quiz;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\user;
use App\Models\catagories;

class quizcontroller extends Controller
{
    //
   
    public function question(){
        return view('quiz.catagory');
    }
  
    //catagory insert
    public function queinsert(Request $request) {
        $cat['catagory']=$request->catagory;
        $INS=DB::table('catagories')->insert($cat);
        return Redirect()->back();
    }
    //data read from database
    public function readque() {
        $que = DB::table('catagories')->get();
        return view('testquiz')->with('catagory',$que);
    }
    public function index(){
      
        $dataas=DB::table('marks')->get();
        return view('dashboard')->with('dataas',$dataas);

    }

    public function que(){
        $data['catagory']=catagories::orderBy('id','desc')->get()->toArray();
		return view('questninsert',$data);
    }
    public function queins(Request $request){
        $cat['question']=$request->question;
        $cat['option1']=$request->option1;
        $cat['option2']=$request->option2;
        $cat['option3']=$request->option3;
        $cat['option4']=$request->option4;
        $cat['ans']=$request->ans;
        $cat['category']=$request->category;

        $INS=DB::table('questions')->insert($cat);
        return Redirect()->back();


    }

    public function studentquiz(){
        $data['catagory']=catagories::orderBy('id','desc')->get()->toArray();
		return view('studentquiz',$data);


    }

    public function ques(Request $request){
        $cat['category']=$request->category;
dd($cat);
    }
}
