@extends('layout')
@section('content')
    <div class="print-section">

        <table class="table table-striped">
            <thead>
              <tr>
                <th>Title</th>
                <th>Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Date</td>
                <td>{{$data['date']}}</td>
              </tr>
              <tr>
                <td>Full Name</td>
                <td>{{$data['fullName']}}</td>
              </tr>
              <tr>
                <td>Email Address</td>
                <td>{{$data['emailAddress']}}</td>
              </tr>
              <tr>
                <td>Land Line</td>
                <td>{{$data['landLineNumber']}}</td>
              </tr>
              <tr>
                <td>Cell Number</td>
                <td>{{$data['cellNumber']}}</td>
              </tr>
              <tr>
                <td>Account Number</td>
                <td>{{$data['accountNumber']}}</td>
              </tr>
              <tr>
                <td>Branch Department</td>
                <td>{{$data['branchDepartment']}}</td>
              </tr>
              <tr>
                <td>Rating</td>
                <td>{{$data['rating']}}</td>
              </tr>
              <tr>
                <td>Rating Explanation</td>
                <td>{{$data['ratingExplanation']}}</td>
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