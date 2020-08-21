<?php

namespace App\Http\Controllers\Questionpaper;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\StudentResponse;

use DB;

class QuestionPapersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questionpaper = DB::table('add_questions')->where('id',1)->first();
        $questionlinks = DB::table('add_questions')->get();
        $studentresponse = DB::table('student_responses')
                           ->orderBy('question_number', 'asc')
                           ->get();
        $studentdetail = DB::table('student_details')->first();
        $totalquestion = 0;
        $questionstatus = DB::table('student_responses')->first();
        $status= "";
        $option = "";
        
        $studentoption = DB::table('student_responses')
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
        $studentresponse = DB::table('student_responses')
                           ->orderBy('question_number', 'asc')
                           ->get();
        return view('questionpaper', [ 'questionpaper' => $questionpaper, 'studentresponse' => $studentresponse, 'questionlinks' => $questionlinks, 'totalquestion' => $totalquestion, 'status' => $status, 'option' => $option, 'studentdetail' => $studentdetail]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $studentresponse = new StudentResponse;
        $color = "";
        $questionnumber = $request->id;
        $rollnumber = $request->rollnumber;
        $stdresponse = DB::table('student_responses')->first();
        $studentdetail = DB::table('student_details')
                         ->where('roll_number', $rollnumber)
                         ->first();
        
        if( $stdresponse == null)
        {
            
            if( $request->option == "" ){
                $studentresponse->student_rollnumber = $rollnumber;
                $studentresponse->question_number = $request->id;
                $studentresponse->student_response = $request->option;
                $studentresponse->question_status = "NOT FILLED";
                $studentresponse->save();
                
            }
            else{
                $studentresponse->student_rollnumber = $rollnumber;
                $studentresponse->question_number = $request->id;
                $studentresponse->student_response = $request->option;
                $studentresponse->question_status = "FILLED";
                $studentresponse->save();
            }
        } 
       else
       {
            $response = DB::table('student_responses')
                        ->where('student_rollnumber', $rollnumber)
                        ->where('question_number', $questionnumber)
                        ->first();
                        
            if($response == null)
            {    
                if( $request->option == "" ){
                    $studentresponse->student_rollnumber = $rollnumber;
                    $studentresponse->question_number = $request->id;
                    $studentresponse->student_response = $request->option;
                    $studentresponse->question_status = "NOT FILLED";
                    $studentresponse->save();
                }
                else{
                    $studentresponse->student_rollnumber = $rollnumber;
                    $studentresponse->question_number = $request->id;
                    $studentresponse->student_response = $request->option;
                    $studentresponse->question_status = "FILLED";
                    $studentresponse->save();
                }
            }
            else
            {   
                if( $request->option == "" )
                {
                    DB::table( 'student_responses' )
                    ->where('student_rollnumber', $rollnumber)
                    ->where( 'question_number', $questionnumber )
                    ->update( [ 'student_response' => $request->option, 
                                'question_status' => "NOT FILLED" ] );
                }
                else
                {
                    DB::table( 'student_responses' )
                    ->where('student_rollnumber', $rollnumber)
                    ->where( 'question_number', $questionnumber )
                    ->update( [ 'student_response' => $request->option,
                                'question_status'  => "FILLED" ] );
                }
            }
       }
       
        $id = $request->id;
        $questionlinks = DB::table('add_questions')->get();
        $questionpaper = DB::table('add_questions')->where('id', $id + 1)->first();
        $studentresponse = DB::table('student_responses')
                           ->where('student_rollnumber', $rollnumber)
                           ->orderBy('question_number', 'asc')
                           ->get();
        $questionstatus = DB::table('student_responses')
                          ->where('student_rollnumber', $rollnumber)
                          ->where('question_number', $id)->first();
        $status= "";
        $option = "";
        $studentoption = DB::table('student_responses')
                         ->where('student_rollnumber', $rollnumber)
                         ->where('question_number', $id + 1)
                         ->first();
        if($studentoption)
        {
            $option = $studentoption->student_response;
        }
        else{
            $option = "";
        }
        $successmessage = "Response saved. Proceed to  Next Question";
        $totalquestion = 0;
        foreach($questionlinks as $totalquest)
        {
            $totalquestion ++;
        }
        if( $request->final == "Final")
        {
            DB::table('student_details')
            ->where('roll_number', $rollnumber)
            ->update( [ 'paper_status' =>  "COMPLETED" ] );

            return view("/finalmessage");
        }
        else{
            return view('/questionpaper',[ 'questionpaper' => $questionpaper, 'studentresponse' => $studentresponse, 'successmessage' => $successmessage, 'questionlinks' => $questionlinks, 'totalquestion' => $totalquestion, 'status' => $status, 'option' => $option, 'rollnumber' => $rollnumber, 'studentdetail' => $studentdetail ]);
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stndcode = explode('_',$id);
        $id = $stndcode[0];
        $rollnumber = $stndcode[1];

        
        $questionpaper = DB::table('add_questions')->where('id',$id)->first();
        $studentresponse = DB::table('student_responses')
                           ->where('student_rollnumber', $rollnumber)
                           ->orderBy('question_number', 'asc')
                           ->get();
        $questionlinks = DB::table('add_questions')->get();
        // $questionstatus = DB::table('student_responses')->first();
        $status= "";
        $option = "";
        $studentoption = DB::table('student_responses')
                         ->where('student_rollnumber', $rollnumber)
                         ->where('question_number',$id)
                         ->first();

        $studentdetail = DB::table('student_details')
                         ->where('roll_number', $rollnumber)
                         ->first();

        if($studentoption == null){
            $option ="";
        }
        else{
            $option = $studentoption->student_response;
        }
        

        $totalquestion = 0;
        foreach($questionlinks as $totalquest)
        {
            $totalquestion ++;
        }
        return view('questionpaper', [ 'questionpaper' => $questionpaper, 'studentresponse' => $studentresponse, 'questionlinks' => $questionlinks, 'totalquestion' => $totalquestion, 'status' => $status, 'option' => $option, 'rollnumber' => $rollnumber, 'studentdetail' => $studentdetail ]);
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
