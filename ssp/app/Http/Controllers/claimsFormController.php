<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Claim;
use DB;
use Mail;

class claimsFormController extends Controller
{
    public function index(){
        return view('claims');
    }

    public function save(Request $request){

        $claim = new Claim;

        //get http request and store in an array
        $data = $request->all();

        //put http data in seperate variables

        $claim->fullName = $data['fullName'];
        $claim->policyNumber = $data['policyNumber'];
        $claim->gender = $data['gender'];
        $claim->dob = $data['dob'];
        $claim->idNumber = $data['idNumber'];
        $claim->occupation = $data['occupation'];
        $claim->homeAddress = $data['homeAddress'];
        $claim->postalAddress = $data['postalAddress'];
        $claim->emailAddress = $data['emailAddress'];
        $claim->businessTelNumber = $data['businessTelNumber'];
        $claim->homeTelNumber = $data['homeTelNumber'];
        $claim->cellNumber = $data['cellNumber'];
        $claim->agreement = $data['agreement'];

        $userData = [];
        $userData = $data;

        Mail::send('email',[
            'fullName'=>$data['fullName'],
            'policyNumber'=>$data['policyNumber'],
            'gender'=>$data['gender'],
            'dob'=>$data['dob'],
            'idNumber'=>$data['idNumber'],
            'occupation'=>$data['occupation'],
            'homeAddress'=>$data['homeAddress'],
            'postalAddress'=>$data['postalAddress'],
            'emailAddress'=>$data['emailAddress'],
            'businessTelNumber'=>$data['businessTelNumber'],
            'homeTelNumber'=>$data['homeTelNumber'],
            'cellNumber'=>$data['cellNumber'],
            
        ], function ($mail) use($data){
            $mail->from($data['emailAddress'],$data['fullName']);

            $mail->to('tkanda123@gmail.com')->subject('Testing!');
        });

        $claim->save();
        return view('print')->with('data',$userData)->with('success', 'Claim Made!');
        
    }

    /* public function sendEmail(Request $request){
        dd($request);
    } */
}
