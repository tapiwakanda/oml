@extends('layout')
@section('content')   
    <div class="container-fluid home">
        <h1>Welcome to the Old Mutual Self Service Portal</h1>
        <p class="paragraph home-text">
            Please Select a service you want to complete below.
        </p>
        <div class="container-fluid options">
            <div class="row">
                <div class="column">
                  <div class="card"><a href="/claims">Submit Details</a></div> 
                </div>
                <div class="column">
                  <div class="card"><a href="/feedback">Send Feedback</a></div>
                </div>
                <div class="column">
                  <div class="card">Make A Claim</div>
                </div>
                <div class="column">
                  <div class="card">Request A Qoute</div>
                </div>
            </div>
        </div>
    </div>
@endsection