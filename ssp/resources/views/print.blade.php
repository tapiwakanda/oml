@extends('layout')
@section('content')
    <div class="container print-section">
        <h1>Below are your details you submitted to us</h1>
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
                <td>{{$data['fullName']}}</td>
              </tr>
              <tr>
                <td>Policy Number</td>
                <td>{{$data['policyNumber']}}</td>
              </tr>
              <tr>
                <td>Gender</td>
                <td>{{$data['gender']}}</td>
              </tr>
              <tr>
                <td>Date Of Birth</td>
                <td>{{$data['dob']}}</td>
              </tr>
              <tr>
                <td>National Identity Number</td>
                <td>{{$data['idNumber']}}</td>
              </tr>
              <tr>
                <td>Occupation</td>
                <td>{{$data['occupation']}}</td>
              </tr>
              <tr>
                <td>Home Address</td>
                <td>{{$data['homeAddress']}}</td>
              </tr>
              <tr>
                <td>Postal Address</td>
                <td>{{$data['postalAddress']}}</td>
              </tr>
              <tr>
                <td>Email Address</td>
                <td>{{$data['emailAddress']}}</td>
              </tr>
              <tr>
                <td>Business Tel. Number</td>
                <td>{{$data['businessTelNumber']}}</td>
              </tr>
              <tr>
                <td>Home Tel. Number</td>
                <td>{{$data['homeTelNumber']}}</td>
              </tr>
              <tr>
                <td>Cell Number</td>
                <td>{{$data['cellNumber']}}</td>
              </tr>
            </tbody>
          </table>
          <button class="btn" onclick="printFunction()">Print Details</button>
          <button class="btn" onclick="goBack()">Cancel</button>


    </div>
    <script type="text/javascript">
        function printFunction(){
            window.print();
        }
        function goBack(){
            window.history.back();
        }
            
    </script>
@endsection