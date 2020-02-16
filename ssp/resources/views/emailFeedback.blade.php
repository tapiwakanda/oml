@extends('layout')
@section('content')
    <div class="container-fluid emailBanner">
    <img src="{{asset('images/email.jpg')}}">
    </div>
    <h1>Personal Details</h1>
    <table class="table table-striped">
        <thead>
          <tr>
            <th>Title</th>
            <th>Value</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Policy Number</td>
            <td>{{$date}}</td>
          </tr>
          <tr>
            <td>Full Name</td>
            <td>{{$fullName}}</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>{{$emailAddress}}</td>
          </tr>
          <tr>
            <td>Land Line</td>
            <td>{{$landLineNumber}}</td>
          </tr>
          <tr>
            <td>Cell Number</td>
            <td>{{$cellNumber}}</td>
          </tr>
          <tr>
            <td>Account Number</td>
            <td>{{$accountNumber}}</td>
          </tr>
          <tr>
            <td>Branch Dpartment</td>
            <td>{{$branchDepartment}}</td>
          </tr>
          <tr>
            <td>Rating</td>
            <td>{{$rating}}</td>
          </tr>
          <tr>
            <td>Rating</td>
            <td>{{$ratingExplanation}}</td>
          </tr>
        </tbody>
      </table>
@endsection