<?php

namespace App\Http\Controllers\StudentDetail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StudentDetail\StudentDetailRequest;
use App\StudentDetail\StudentDetail;

class StudentdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentcode = 'OES-'.rand();
        return view('studentdetails', [ 'studentcode' => $studentcode ] );
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
    public function store(StudentDetailRequest $stdrequest)
    { 
        $studentcode = 'OES-'.rand();
        $studentdetail = new StudentDetail();
        $studentdetail->registration_number = $stdrequest->registrationnumber;
        $studentdetail->roll_number = $stdrequest->rollnumber;
        $studentdetail->class = $stdrequest->class;
        $studentdetail->stream = $stdrequest->stream;
        $studentdetail->exam_start_time = $stdrequest->examstarttime;
        $studentdetail->exam_end_time = $stdrequest->examendtime;
        $studentdetail->exam_date = $stdrequest->examdate;
        $studentdetail->std_code = $stdrequest->studentcode;
        $photographname    = $stdrequest->file('photograph')->getClientOriginalName();
        $extension         = $stdrequest->file('photograph')->getClientOriginalExtension();
        $studentphotograph = date('Ymd').'_'.time().'.'.$extension;
        $stdrequest->file('photograph')->move(base_path()."/public/uploads/",$studentphotograph);
        $studentdetail->photograph = $studentphotograph;
        $studentdetail->paper_status = "INCOMPLETE";
        $studentdetail->save();
        $successmessage = "Details submitted!";
        return view('studentdetails', [ 'successmessage' => $successmessage, 'studentcode' => $studentcode ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
