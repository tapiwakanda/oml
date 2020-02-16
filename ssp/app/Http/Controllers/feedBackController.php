<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use DB;
use Mail;

class feedBackController extends Controller
{
    public function index(){
        return view('feedback');
    }

    public function save(Request $request){

        $feedback = new Feedback;

        $data = $request->all();

        $feedback->date = $data['date'];
        $feedback->fullName = $data['fullName'];
        $feedback->emailAddress = $data['emailAddress'];
        $feedback->landLineNumber = $data['landLineNumber'];
        $feedback->cellNumber = $data['cellNumber'];
        $feedback->accountNumber = $data['accountNumber'];
        $feedback->branchDepartment = $data['branchDepartment'];
        $feedback->rating = $data['rating'];
        $feedback->ratingExplanation = $data['ratingExplanation'];

        $userData = [];
        $userData = $data;

        Mail::send('emailFeedback',[
            'date'=>$data['date'],
            'fullName'=>$data['fullName'],
            'emailAddress'=>$data['emailAddress'],
            'landLineNumber'=>$data['landLineNumber'],
            'cellNumber'=>$data['cellNumber'],
            'accountNumber'=>$data['accountNumber'],
            'branchDepartment'=>$data['branchDepartment'],
            'rating'=>$data['rating'],
            'ratingExplanation'=>$data['ratingExplanation'],
            
        ], function ($mail) use($data){
            $mail->from($data['emailAddress'],$data['fullName']);

            $mail->to('tkanda123@gmail.com')->subject('Testing!');
        });

        $feedback->save();

        return view('printFeedBack')->with('data',$userData)->with('success', 'Fedback Sent!'); 
    }
}
