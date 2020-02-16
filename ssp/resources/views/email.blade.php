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
            <td>Full Name</td>
            <td>{{$fullName}}</td>
          </tr>
          <tr>
            <td>Policy Number</td>
            <td>{{$policyNumber}}</td>
          </tr>
          <tr>
            <td>Gender</td>
            <td>{{$gender}}</td>
          </tr>
          <tr>
            <td>Date Of Birth</td>
            <td>{{$dob}}</td>
          </tr>
          <tr>
            <td>National Identity Number</td>
            <td>{{$idNumber}}</td>
          </tr>
          <tr>
            <td>Occupation</td>
            <td>{{$occupation}}</td>
          </tr>
          <tr>
            <td>Home Address</td>
            <td>{{$homeAddress}}</td>
          </tr>
          <tr>
            <td>Postal Address</td>
            <td>{{$postalAddress}}</td>
          </tr>
          <tr>
            <td>Email Address</td>
            <td>{{$emailAddress}}</td>
          </tr>
          <tr>
            <td>Business Tel. Number</td>
            <td>{{$businessTelNumber}}</td>
          </tr>
          <tr>
            <td>Home Tel. Number</td>
            <td>{{$homeTelNumber}}</td>
          </tr>
          <tr>
            <td>Cell Number</td>
            <td>{{$cellNumber}}</td>
          </tr>
        </tbody>
      </table>
@endsection