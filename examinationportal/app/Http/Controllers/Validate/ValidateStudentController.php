<?php

namespace App\Http\Controllers\Validate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ValidateStudentController extends Controller
{
    public function validateview()
    {
        return view('validatestudent');
    }

    public function validatestudent(Request $request)
    {
        $studentdetail = DB::table('student_details')
                         ->where('std_code', $request->studentcode)
                         ->where('paper_status',  "INCOMPLETE" )
                         ->first();
       
        $successmessage = "";
        $nodatamessage = "";
        

        if($studentdetail)
        {
            $studentcode = $request->studentcode;
            $rollnumber = $studentdetail->roll_number;
            $examstarttime = $studentdetail->exam_start_time;
            $examendtime = $studentdetail->exam_end_time;
            $examdt = $studentdetail->exam_date;
            $examdt =  explode('-', $examdt);
            $year = $examdt[0];
            $examdate = $examdt[1].'-'.$examdt[2].'-'.$examdt[0];
            
            $st_time    =   strtotime($examstarttime);
            $end_time   =   strtotime($examendtime);
            $cur_time   =   strtotime(date('h:i:s'));
            $cur_time >= $st_time && $cur_time <= $end_time;

            if( $studentdetail->exam_date == date('Y-m-d') )
            {
                // $successmessage = "Your data is present. Click here to proceed";
                // $link = "authentic/".$request->studentcode.'_'.$studentdetail->roll_number;
              

                $questionpaper = DB::table('add_questions')->where('id',1)->first();

                $questionlinks = DB::table('add_questions')->get();

                $studentresponse = DB::table('student_responses')
                                   ->where('student_rollnumber', $rollnumber)
                                   ->orderBy('question_number', 'asc')
                                   ->get();

                $studentdetail = DB::table('student_details')
                                 ->where('roll_number', $rollnumber)
                                 ->first();
                                 
                $totalquestion = 0;
                $questionstatus = DB::table('student_responses')->first();
                $status= "";
                $option = "";
                
                $studentoption = DB::table('student_responses')
                                 ->where('student_rollnumber', $rollnumber)
                                 ->where('question_number',1)
                                 ->first();
                if($studentoption)
                {
                    $option = $studentoption->student_response;
                }
                else{
                    $option = "";
                }
                foreach($questionlinks as $totalquest)
                {
                    $totalquestion ++;
                }
                return view('questionpaper', [ 'questionpaper' => $questionpaper, 'studentresponse' => $studentresponse, 'questionlinks' => $questionlinks, 'totalquestion' => $totalquestion, 'status' => $status, 'option' => $option, 'studentdetail' => $studentdetail, 'studentcode' => $studentcode, 'rollnumber' => $rollnumber, 'examstarttime' => $examstarttime, 'examendtime' => $examendtime, 'examdate' => $examdate ]);
        
            }
            else
            {
                $successmessage = "Exam will start at ".$studentdetail->exam_start_time." on ".$studentdetail->exam_date; 
            }
        }
        else
        {
            $nodatamessage = "Sorry! You have completed your question paper or your data is not present !";
        }
        return view( 'validatestudent', [ 'successmessage' => $successmessage, 'nodatamessage' => $nodatamessage ] );
    }
}
