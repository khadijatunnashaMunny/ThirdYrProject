<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\exam_master;
use App\Models\exam_result;

class StudentController extends Controller
{
    public function joinxm(){
        $data['all_question']=exam_master::get()->toArray();
        return view('joinxm',$data);
    }
    public function student_exam(){

        return view('add_que');

    }
    public function add_new_question(Request $request){
        // echo "<pre>";
        // print_r($request->all());
        // $question->exam_id=$request->exam_id;
        $info['question']=$request->question;
        $info['ans']=$request->ans;
        $info['options']=json_encode(array('option1'=>$request->option1,
        'option2'=>$request->option2,
        'option3'=>$request->option3,
        'option4'=>$request->option4));
        // $info['status']=$request->status=1;
        // $info['exam_id']=$request->exam_id;


		// $question->question=$request->question;
		// $question->ans=$request->ans;
		// $question->status=1;
		// $question->options=json_encode(array('option1'=>$request->option1,
        // 'option2'=>$request->option2,
        // 'option3'=>$request->option3,
        // 'option4'=>$request->option4));
		// $question->save();
        $INS=DB::table('exam_masters')->insert($info);
        return Redirect()->back();

    }
    public function submit_que(Request $request){
        $yes_ans=0;
        $no_ans=0;
        $data=$request->all();
        $result=array();
        for($i=1;$i<=$request->index;$i++)
        {
            if(isset($data['question'.$i]))
            {
                $question=exam_master::where('id',$data['question'.$i])->get()->first();
                if($question->ans==$data['ans'.$i])
                {
                    $result[$data['question'.$i]]='YES';
                     $yes_ans++;
                }
                else 
                {
                    $result[$data['question'.$i]]='NO';
                    $no_ans++;

                }
            }
        }

        $res = new exam_result();
        // $res->exam_id=$request->exam_id;
        // $res->user_id=Session::get('id');
        $res->yes_ans=$yes_ans;
        $res->no_ans=$no_ans;
        $res->result_json=json_encode($result);
         $res->save();

       
        echo "<pre>";
        echo "Right ans  :  ";
        print_r($yes_ans);
        echo "</pre>";
        echo "<pre>";
        echo "Wrong ans  :  ";
        print_r($no_ans);

    }
}
