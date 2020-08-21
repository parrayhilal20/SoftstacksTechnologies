<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\EmployeeDetail\EmployeeDetailsRequest;
use App\EmployeeDetail;

class EmployeedetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employeedetails');
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
    public function store(EmployeeDetailsRequest $request)
    {
        $employeedetail = new EmployeeDetail();
        $employeedetail->employee_nnumber   = $request->employeennumber;
        $employeedetail->employee_designation   = $request->designation;
        $employeedetail->employee_department   = $request->department;
        $employeedetail->class_allocated   = $request->classallocated;
        $employeedetail->stream_allocated   = $request->streamallocated;
        $employeedetail->subject_allocated   = $request->subjectallocated;
        $employeedetail->date   = $request->date;
        $photographname    = $request->file('photograph')->getClientOriginalName();
        $extension         = $request->file('photograph')->getClientOriginalExtension();
        $employeephotograph = date('Ymd').'_'.time().'.'.$extension;
        $request->file('photograph')->move(base_path()."/public/uploads/employee/",$employeephotograph);
        $employeedetail->photograph = $employeephotograph;
        $employeedetail->save();
        $successmessage = "Details submitted!";
        return view('employeedetails', [ 'successmessage' => $successmessage ]);
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
