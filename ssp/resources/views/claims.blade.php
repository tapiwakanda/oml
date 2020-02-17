@extends('layout')
@section('content')

    
<div class="container feedBackContainer">
    <h1>Submit Your Details Below</h1>
    {!! Form::open(['action' => 'claimsFormController@save', 'method'=> 'POST']) !!}
        <div class="form-group">
            {{Form::label('fullName', 'Full Name')}}
            {{Form::text('fullName', '', ['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('policyNumber', 'Policy Number')}}
            {{Form::text('policyNumber', '', ['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('gender', 'Gender')}}
            {{Form::text('gender', '', ['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('dob', 'Date Of Birth')}}
            {{Form::date('dob', '', ['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('idNumber', 'National Identity Number')}}
            {{Form::text('idNumber', '', ['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('occupation', 'Occupation')}}
            {{Form::text('occupation', '', ['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('homeAddress', 'Home Address')}}
            {{Form::text('homeAddress', '', ['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('postalAddress', 'Postal Address')}}
            {{Form::text('postalAddress', '', ['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('emailAddress', 'Email Address')}}
            {{Form::text('emailAddress', '', ['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('businessTelNumber', 'Business Tel. Number')}}
            {{Form::text('businessTelNumber', '', ['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('homeTelNumber', 'Home Tel. Number')}}
            {{Form::text('homeTelNumber', '', ['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('cellNumber', 'Cell Number')}}
            {{Form::text('cellNumber', '', ['class'=>'form-control'])}}
        </div>

        
        <div class="form-group">
            {{Form::label('agreement', 'Agreement')}}
            {{Form::checkbox('agreement', 'Yes')}}  
        </div>

        @csrf

        {{Form::submit('Submit')}}
        

    {!! Form::close() !!}
    <button class="btn" onclick="goBack()">Cancel</button>

</div>
<script type="text/javascript">
    function goBack(){
        window.history.back();
    }
</script>

@endsection