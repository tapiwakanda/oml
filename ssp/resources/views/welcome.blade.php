@extends('layout')
@section('content')   
    <div class="container-fluid home">
        <nav class="navbar">
            <img class="logo" src="{{asset('images/logo.png')}}">
        </nav>
        <h1>Hi, how can we help you?</h1>
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