<?php

namespace App\Http\Controllers\Validate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AuthenticStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
        $studentcode = $stndcode[0];
        $id = $stndcode[1];

        $questionpaper = DB::table('add_questions')->where('id',1)->first();
        $questionlinks = DB::table('add_questions')->get();
        $studentresponse = DB::table('student_responses')
                           ->orderBy('question_number', 'asc')
                           ->get();
        $studentdetail = DB::table('student_details')
                         ->where('roll_number', $id)
                         ->first();
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
        return view('questionpaper', [ 'questionpaper' => $questionpaper, 'studentresponse' => $studentresponse, 'questionlinks' => $questionlinks, 'totalquestion' => $totalquestion, 'status' => $status, 'option' => $option, 'studentdetail' => $studentdetail, 'studentcode' => $studentcode, 'id' => $id ]);
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
