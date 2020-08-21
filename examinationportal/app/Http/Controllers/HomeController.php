<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quesiton\AddQuestion;
use App\question_response;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

     /**
     * Stote the Quesiton and the Options.
     *
     */
    public function addquestion(Request $request)
    {
        $addquestions = new AddQuestion;
        $addquestions->question = $request->addquestion;
        $addquestions->option1  = $request->option1;
        $addquestions->option2  = $request->option2;
        $addquestions->option3  = $request->option3;
        $addquestions->option4  = $request->option4;
        $addquestions->save();

        $id = DB::table('add_questions')->get();
        $lastquestionid = $id;

        foreach($id as $lastid){
            $lastquestionid = $lastid->id;
        }

        $questionresponse = new question_response;
        $questionresponse->actual_response =  $request->actual_response;
        $questionresponse->question_number  =  $lastquestionid;
        $questionresponse->save();

        $successmessage = "Data saved. Proceed to Add Next Question";
        return view('/home',['successmessage' => $successmessage]);

    }
}
